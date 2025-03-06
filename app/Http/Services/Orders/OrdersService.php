<?php

namespace App\Http\Services\Orders;

use App\Admin\Repositories\TradesOrder;
use App\Cache\User\OauthCache;
use App\Http\Services\BaseService;
use App\Http\Services\Financial\FinancialService;
use App\Jobs\ProcessMatchingJob;
use App\Models\Order\C2cOrderModel;
use App\Services\MarketService;
use App\Utils\ArrayFilter;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\Redis;
use Log;
use Weiwait\DcatEasySms\Models\SmsGateway;
use Weiwait\DcatEasySms\Models\SmsConfig;

class OrdersService extends BaseService
{

    protected string $logChannel = 'orders';

    public function sendC2cOrders($request, $entrust_type)
    {
        $userId = $request->offsetGet('user_id');
        $amount = $request->get('amount');
        $currency = $request->get('currency');
//        $remaining_amount = $request->get('remaining_amount');
//        $total_price = $request->get('total_price');
        $unit_price = $request->get('unit_price');

        if (strpos($currency, '/')!== false) {
            if($entrust_type === 'buy'){
                //要冻结的币种
                $price_currency = explode('/', $currency)[1];
                //所需余额
                $required_money = $unit_price * $amount;
            }else{
                $price_currency = explode('/', $currency)[0];
                $required_money =  $amount;
            }
        }else{
            throw new \Exception("错误的币种");
        }
        // 检查余额
        $check_money = (new FinancialService())->CheckCurrencyMoney($price_currency, $required_money);
        if (!$check_money) {
            throw new \Exception("余额不足");
        }
        DB::beginTransaction();
        // 创建委托订单
        $insert = [
            'order_no' => order_no(),
            'user_id' => $userId,
            'type' => 'limit',
            'entrust_type' => $entrust_type,
            'order_type' => 'DC',
            'amount' => $amount,
            'remaining_amount' => $amount,
            'total_price' => $unit_price * $amount,
            'unit_price' => $unit_price,
            'currency' => $currency,
            'currency_ratio' => '0.2',
            'pay_type' => 1,
            'pay_status' => 0,
        ];
        $timeScore = now()->timestamp;
        $order = C2cOrderModel::create($insert);
        //冻结金额
        try {
            (new FinancialService())->ChangeUserMoney($userId,$price_currency, $required_money, $order['order_no'], 'freeze', 'c2c_order');
        } catch (Exception $e) {
            DB::rollBack();
            throw new \Exception("Failed to reduce user money: " . $e->getMessage());
        }
        // 根据委托类型设置分数计算逻辑
        if ($entrust_type === 'buy') {
            // 买单：价格从高到低，价格相同时按时间升序
            $priceScore = $insert['unit_price'] * 1e6; // 放大价格作为主权重
            $score = $priceScore - $timeScore; // 时间越早，最终 score 越高
        } else {
            // 卖单：价格从低到高，相同价格按时间升序
            $priceScore = $insert['unit_price'] * 1e6;
            $score = $priceScore + $timeScore; // 价格越低、时间越早分数越小
        }
        // 将订单信息添加到 Redis 有序集合，按价格时间 排序
        // 将订单库存存入 Redis，以订单编号作为主键

        try {
            Redis::zAdd("c2c_orders:{$entrust_type}:{$order['currency']}", $score, $order->order_no);
            Redis::hSet(ORDER_INVENTORY, $order['order_no'], $order['remaining_amount']);
            DB::commit();
        }catch (Exception $e){
            DB::rollBack();
            throw new \Exception("Failed to add order to Redis: " . $e->getMessage());
        }

    }
//

    /**
     * 创建交易单
     */
    protected function createTrade(C2cOrderModel $buyOrder, C2cOrderModel $sellOrder, $amount)
    {
        return TradesOrder::create([
            'buy_order_id' => $buyOrder->id,
            'sell_order_id' => $sellOrder->id,
            'amount' => $amount,
            'price' => $sellOrder->price,
        ]);
    }


    public function getTradBuy($request)
    {
        $page_size = $request->get('page_size');
        $currency = $request->get('currency');

        // 从 Redis 中获取 c2c_match_currency list 中的所有币种
        $currencies = Redis::lRange(MATCH_CURRENCY, 0, -1);  // 获取整个 list 的所有元素
        // 判断传入的 currency 是否在 list 中
        if (!in_array($currency, $currencies)) {
            return ['sell' => [], 'buy' => []];// 如果 currency 不在 list 中，返回空数组
        }
        // 获取所有卖单和买单
        $sellOrders = Redis::zRangeByScore(SELL_ORDER_KEY . ":$currency", '-inf', '+inf', [
            'limit' => [0, $page_size],  // 获取所有的卖单
        ]);
        $buyOrders = Redis::zRevRangeByScore(BUY_ORDER_KEY . ":$currency", '+inf', '-inf', [
            'limit' => [0, $page_size],  // 获取所有的买单
        ]);
        $sellOrderDetails = (new C2cMatchingService())->getOrdersDetails($sellOrders);
        $buyOrderDetails = (new C2cMatchingService())->getOrdersDetails($buyOrders);
        $fields = ['unit_price', 'total_price', 'remaining_amount', 'updated_at'];
        // 返回过滤后的数据
        return [
            'sell' => $this->orderDetailsByOrderNo($sellOrders, ArrayFilter::filterFields($sellOrderDetails, $fields)),
            'buy' => $this->orderDetailsByOrderNo($buyOrders, ArrayFilter::filterFields($buyOrderDetails, $fields))
        ];

    }

    /**
     * 根据订单号顺序排序订单详情数据
     */
    private function orderDetailsByOrderNo(array $orderNos, array $orderDetails): array
    {
        $orderedDetails = [];
        foreach ($orderNos as $orderNo) {
            if (isset($orderDetails[$orderNo])) {
                $orderedDetails[$orderNo] = $orderDetails[$orderNo];
            }
        }
        return $orderedDetails;
    }

    /**
     * 撤单操作
     */
    public function cancelOrder($orderId)
    {
        $order = C2cOrderModel::query()->where('order_no',$orderId)->firstOrFail();
        if (!$order || $order->pay_status != 0) {
            throw new \Exception("Cannot cancel an already completed or non-existent order.");
        }

        DB::beginTransaction();

        try {
            if ($order->entrust_type == 'buy') {
                // 买单：解冻资金
                $orderKey = BUY_ORDER_KEY;
                $currency = explode('/', $order->currency)[1];
                $amount = $order->total_price;
                (new FinancialService())->ChangeUserMoney($order->user_id, $currency, $amount, $order->order_no, 'cancel_freeze', 'c2c_order');
            } else if ($order->entrust_type =='sell') {
                // 卖单：解冻资金
                $orderKey = SELL_ORDER_KEY;
                $currency = explode('/', $order->currency)[0];
                $amount = $order->amount;
                (new FinancialService())->ChangeUserMoney($order->user_id, $currency, $amount, $order->order_no, 'cancel_freeze', 'c2c_order');
            }
            //解冻资金

            //更新订单状态
            C2cOrderModel::query()->where('order_no', $orderId)->update(['pay_status' => 3]);

            Redis::zRem("$orderKey:$order->currency", $order->order_no);
            Redis::hDel(ORDER_INVENTORY, $order->order_no);
            // 删除缓存中的订单信息
            Redis::hDel(ORDER_INFO_KEY, $order->order_no);


            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Failed to cancel order ID {$orderId}: " . $e->getMessage());
            throw $e;
        }
    }


    //市价交易买入
    public function marketTradeBuy($request)
    {
        DB::beginTransaction();
        try {
            $symbol = $request->get('currency');
            $price_currency = explode('/', $symbol)[1];
            $money = $request->get('amount');
            //校验余额
            $check_money = (new FinancialService())->CheckCurrencyMoney($price_currency, $money);
            if (!$check_money) {
                throw new \Exception("余额不足");
            }
            //获取当前市场价格
            $market_price = (new MarketService())->getPrice(explode('/', $symbol)[0], explode('/', $symbol)[1]);
            //计算买入币的量
            $buy_num = sprintf("%.8f", ($money / $market_price));
            //计算手续费
            $fee = 0;
            //实际到账号的币量
            $real_num = $buy_num - $fee;
            //生成交易记录
            // 创建委托订单
            $insert = [
                'order_no' => order_no(),
                'user_id' => auth()->user()->user_id,
                'type' => 'market',
                'entrust_type' => 'buy',
                'order_type' => 'DC',
                'amount' => $real_num,
                'remaining_amount' => 0,
                //总花费
                'total_price' => $money,
                'unit_price' => $market_price,
                'currency' => request('currency'),
                'currency_ratio' => '0.2',
                'pay_type' => 1,
                'pay_status' => 2,
            ];
            $order = C2cOrderModel::create($insert);
            //扣除消费资金
            (new FinancialService())->ChangeUserMoney(auth()->user()->user_id, explode('/', $symbol)[1], $money, $order['order_no'], 'reduce', 'c2c_order');
            //增加购买的币种
            (new FinancialService())->ChangeUserMoney(auth()->user()->user_id, explode('/', $symbol)[0], $real_num, $order['order_no'], 'add', 'c2c_order');

        }catch (Exception $e){
            DB::rollBack();
            throw new \Exception("Failed to create order: " . $e->getMessage());
        }
        DB::commit();
    }

    //市价交易卖出
    public function marketTradeSell($request)
    {
        DB::beginTransaction();
      try {
        $symbol = $request->get('currency');
        $price_currency = explode('/', $symbol)[0];
        $money = $request->get('amount');
        //校验余额
        $check_money = (new FinancialService())->CheckCurrencyMoney($price_currency, $money);
        if (!$check_money) {
            throw new \Exception("余额不足");
        }
        //获取当前市场价格
        $market_price = (new MarketService())->getPrice(explode('/', $symbol)[0], explode('/', $symbol)[1]);
        //计算卖出币的量
        $buy_num = $money * $market_price;
        //计算手续费
        $fee = 0;
        //实际到账号的币量
        $real_num = $buy_num - $fee;
        //生成交易记录
        // 创建委托订单
        $insert = [
            'order_no' => order_no(),
            'user_id' => auth()->user()->user_id,
            'type' => 'market',
            'entrust_type' => 'sell',
            'order_type' => 'DC',
            'amount' => $money,
            'remaining_amount' => 0,
            //总花费
            'total_price' => $money,
            'unit_price' => $market_price,
            'currency' => request('currency'),
            'currency_ratio' => '0.2',
            'pay_type' => 1,
            'pay_status' => 2,
        ];
        $order = C2cOrderModel::create($insert);
        //扣除消费资金
        (new FinancialService())->ChangeUserMoney(auth()->user()->user_id, explode('/', $symbol)[0], $money, $order['order_no'], 'reduce', 'c2c_order');
        //增加购买的币种
        (new FinancialService())->ChangeUserMoney(auth()->user()->user_id, explode('/', $symbol)[1], $real_num, $order['order_no'], 'add', 'c2c_order');

        }catch (Exception $e){
            DB::rollBack();
            throw new \Exception($e->getMessage());
        }

        DB::commit();

    }


}
