<?php

namespace App\Http\Services\Orders;

use App\Admin\Repositories\TradesOrder;
use App\Cache\User\OauthCache;
use App\Http\Services\BaseService;
use App\Jobs\ProcessMatchingJob;
use App\Models\Order\C2cOrderModel;
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
        // 创建委托订单
        $insert = [
            'order_no' => order_no(),
            'user_id' => $userId,
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
        Redis::zAdd("c2c_orders:{$entrust_type}:{$order['currency']}", $score, $order->order_no);
        // 将订单库存存入 Redis，以订单编号作为主键
        Redis::hSet(ORDER_INVENTORY, $order['order_no'], $order['remaining_amount']);

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
        $order = C2cOrderModel::find($orderId);

        if (!$order || $order->status === 'completed') {
            throw new \Exception("Cannot cancel an already completed or non-existent order.");
        }

        DB::beginTransaction();

        try {
            // 回滚该订单的部分成交量
            $order->remaining_amount = $order->amount;
            $order->status = 'canceled';
            $order->save();

            // 移除 Redis 中的该订单
            Redis::zrem("orders:{$order->type}", $order->id);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error("Failed to cancel order ID {$orderId}: " . $e->getMessage());
            throw $e;
        }
    }
}
