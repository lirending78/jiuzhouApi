<?php

namespace App\Http\Services\Orders;

use App\Http\Services\BaseService;
use App\Models\Order\C2cOrderModel;
use App\Models\Order\TradesOrderModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use RuntimeException;
use Throwable;

class C2cMatchingService extends BaseService
{
    protected string $buyOrdersKey = BUY_ORDER_KEY;       //买单key

    protected string $sellOrdersKey = SELL_ORDER_KEY;     // 卖单key

    protected string $ordersInfoKey = ORDER_INFO_KEY;     //订单信息 key

    protected string $inventoryKey = ORDER_INVENTORY; // 库存key

    protected int $pageSize = 100;  // 每次获取的买单/卖单数量，进行分块处理

    protected string $matchedOrdersKey = MATCHED_ORDERS_KEY; // 已匹配的订单集合

    protected string $currency;

    // 锁的过期时间，单位秒
    protected int $lockExpireTime = 10;  // 30秒

    protected string $logChannel = 'c2c_order';

    //根据币种 开启撮合消费
    public function startMatching(): void
    {
        // 从 Redis 中取出多个币种（可以是从左到右的方式）
        // 获取所有币种的数量
        $currenciesCount = Redis::lLen(MATCH_CURRENCY);
        // 如果队列中有待处理的币种
        if ($currenciesCount > 0) {
            // 从队列中取出所有币种（可以是从左到右的方式）
            $currencies = Redis::lRange(MATCH_CURRENCY, 0, $currenciesCount - 1);
            // 遍历这些币种并进行撮合
            foreach ($currencies as $currency) {
                // 调用撮合方法处理当前币种
                //                ProcessMatchingJob::dispatch($currency);
                $this->matchOrders($currency);
            }

            $this->log()->info("已处理 $currenciesCount 个币种");
        } else {
            $this->log()->info('当前没有待处理的币种');
        }
    }

    /**
     * 执行C2C撮合逻辑
     */
    public function matchOrders(string $currency): void
    {
        $this->currency = $currency;
        $this->log()->info("开始执行C2C撮合逻辑，货币: $currency");

        // 获取所有卖单和买单
        $sellOrders = Redis::zRangeByScore($this->sellOrdersKey . ":$this->currency", '-inf', '+inf', [
            'limit' => [0, $this->pageSize],  // 获取所有的卖单
        ]);
        $buyOrders = Redis::zRevRangeByScore($this->buyOrdersKey . ":$this->currency", '+inf', '-inf', [
            'limit' => [0, $this->pageSize],  // 获取所有的买单
        ]);

        // 如果卖单和买单都没有数据，直接返回
        if (empty($sellOrders) || empty($buyOrders)) {
            $this->log()->info('没有足够的买单或卖单，跳过本次撮合');

            return;
        }

        // 将所有订单信息缓存到内存
        $sellOrderDetails = $this->getOrdersDetails($sellOrders);
        $buyOrderDetails = $this->getOrdersDetails($buyOrders);

        // 遍历每个卖单并进行匹配
        foreach ($sellOrderDetails as $sellOrder) {
            // 如果卖单已撤销，跳过
            if ($this->isOrderCancelled($sellOrder['order_no'])) {
                continue;
            }

            // 遍历每个买单并进行匹配
            foreach ($buyOrderDetails as $buyOrder) {
                // 如果买单已撤销，跳过
                if ($this->isOrderCancelled($buyOrder['order_no'])) {
                    continue;
                }

                // 锁定当前买单
                $lockKey = "lock:c2c_orders:{$sellOrder['order_no']}-{$buyOrder['order_no']}";

                if (!$this->lockOrder($lockKey)) {
                    $this->log()->info("锁定失败，跳过当前买单: {$buyOrder['order_no']}");

                    continue;
                }
                try {

                    // 如果满足条件，执行交易
                    if ($this->canMatch($buyOrder, $sellOrder)) {
                        $tradeAmount = $this->bcmin($buyOrder['remaining_amount'], $sellOrder['remaining_amount'], 15);
                        if (bccomp($tradeAmount, '0', 15) <= 0) {
                            $this->log()->error("交易数量为零或负数，跳过交易，买单: {$buyOrder['order_no']}, 卖单: {$sellOrder['order_no']}");
                            return;
                        }
                        $this->executeTrade($buyOrder, $sellOrder, $tradeAmount);
                    }

                }catch (RuntimeException $e){
                    $this->log()->error("撮合失败，错误信息: {$e->getMessage()}", ['exception' => $e]);
                    $this->unlockOrder($lockKey);
                } finally {
                    $this->unlockOrder($lockKey);
                }
            }
        }
        $this->log()->info('C2C撮合逻辑执行完毕');
    }

    /**
     * 批量获取订单详细信息
     */
    public function getOrdersDetails(array $orderNos): array
    {
        $orderDetails = [];
        if (empty($orderNos)) {
            return $orderDetails;
        }

        // 使用 Redis pipeline 批量操作获取订单信息
        $pipeline = Redis::pipeline();
        foreach ($orderNos as $orderNo) {
            $pipeline->hGet($this->ordersInfoKey, $orderNo);  // 将所有查询请求放入 pipeline
        }

        // 执行所有请求
        $responses = $pipeline->exec();

        // 将返回结果映射为订单详情

        // 将返回结果映射为订单详情
        foreach ($responses as $index => $orderJson) {
            $orderNo = $orderNos[$index];
            if ($orderJson) {
                // 如果 Redis 中有数据，直接返回
                $orderArray = json_decode($orderJson, true);

                // 获取库存信息
                $remainingAmount = $this->getUserInventory($orderNo);  // 使用 order_no 获取库存
                $orderArray['remaining_amount'] = $remainingAmount;

                $orderDetails[$orderNo] = $orderArray;
            } else {
                // 如果 Redis 中没有数据，从数据库中查询
                $order = C2cOrderModel::where('order_no', $orderNo)->first();
                if ($order) {
                    // 如果数据库中找到订单，存入 Redis 并返回
                    $orderArray = $order->toArray();

                    // 获取库存信息
                    $remainingAmount = $this->getUserInventory($orderNo);  // 使用 order_no 获取库存
                    $orderArray['remaining_amount'] = $remainingAmount;

                    // 将订单数据存入 Redis
                    Redis::hSet($this->ordersInfoKey, $orderNo, json_encode($orderArray));

                    $orderDetails[$orderNo] = $orderArray;
                } else {
                    // 如果数据库中也没有，返回空或其他处理逻辑
                    $orderDetails[$orderNo] = null;
                }
            }
        }

        return $orderDetails;
    }

    /**
     * 判断订单是否已经被撤销
     *
     * @param string $orderNo 订单编号
     * @return bool 是否已撤销
     */
    private function isOrderCancelled(string $orderNo): bool
    {
        // 查询订单的当前状态
        $order = C2cOrderModel::query()->where('order_no', $orderNo)->first();

        return $order && $order->pay_status === 3; // 3表示已撤销
    }


    private function hasAlreadyMatched(string $buyOrderNo, string $sellOrderNo): bool
    {
        return Redis::sIsMember($this->matchedOrdersKey . "$this->currency", "{$buyOrderNo}_$sellOrderNo");
    }

    // 判断买单和卖单是否满足撮合条件（买单价格大于卖单价格，且币种匹配）

    private function lockOrder(string $lockKey): bool
    {
        return Redis::set($lockKey, 1, 'NX', 'EX', $this->lockExpireTime); // NX表示如果锁不存在则设置，EX表示30秒后自动过期
    }

    /**
     * 判断买单和卖单是否满足撮合条件（买单价格大于卖单价格，且币种匹配）
     */
    private function canMatch(array $buyOrder, array $sellOrder): bool
    {
        // 确保买单价格大于等于卖单价格，币种匹配，未匹配过，剩余数量大于零
        return $buyOrder['unit_price'] >= $sellOrder['unit_price'] &&
            $buyOrder['currency'] === $sellOrder['currency'] &&
            !$this->hasAlreadyMatched($buyOrder['order_no'], $sellOrder['order_no']) &&
            bccomp($buyOrder['remaining_amount'], '0', 15) == 1 &&
            bccomp($sellOrder['remaining_amount'], '0', 15) == 1;
    }

    private function bcmin($left_operand, $right_operand, $scale = 15)
    {
        return (bccomp($left_operand, $right_operand, $scale) == -1) ? $left_operand : $right_operand;
    }

    /**
     * 执行交易撮合，生成交易订单，并进行资金校验与更新
     *
     * @param array $buyOrder 买单信息
     * @param array $sellOrder 卖单信息
     * @param float $tradeAmount 交易金额
     *
     * @throws Throwable
     */
    private function executeTrade(array &$buyOrder, array &$sellOrder, float $tradeAmount): void
    {
        $this->log()->info("开始执行交易撮合，买单: {$buyOrder['order_no']}, 卖单: {$sellOrder['order_no']}, 交易金额: $tradeAmount");
        // 检查交易数量
        if (bccomp($tradeAmount, '0', 15) <= 0) {
            $this->log()->error("交易数量为零或负数，跳过交易");
            return;
        }
        DB::beginTransaction();  // 开始事务

        try {
            // 校验买方是否有足够余额
            //            $buyWallet = $this->checkBuyOrderBalance($buyOrder['user_id'], $tradeAmount, $sellOrder['unit_price']);
            //            if (!$buyWallet) {
            //                $this->log()->error("买方余额不足，买单: {$buyOrder['order_no']}, 交易金额: {$tradeAmount}");
            //                throw new Exception('买方余额不足');
            //            }

            // 校验卖方是否有足够库存
            $sellWallet = $this->checkSellOrderBalance($sellOrder['order_no'], $tradeAmount);
            if (!$sellWallet) {
                $this->log()->error("卖方库存不足，卖单: {$sellOrder['order_no']}, 交易金额: $tradeAmount");

                return;
            }

            // 成交价格应以卖方的价格为准
            $tradePrice = $sellOrder['unit_price'];  // 使用卖单价格作为成交价格
            // 检查交易价格
            if (bccomp($tradePrice, '0', 15) <= 0) {
                $this->log()->error("交易价格为零或负数，跳过交易");
                DB::rollBack();
                return;
            }
            // 更新库存
            $buyOrder['remaining_amount'] = bcsub($buyOrder['remaining_amount'], $tradeAmount, 15);
            $sellOrder['remaining_amount'] = bcsub($sellOrder['remaining_amount'], $tradeAmount, 15);
            // 确保剩余数量不为负数
            if (bccomp($buyOrder['remaining_amount'], '0', 15) == -1) {
                $buyOrder['remaining_amount'] = '0';
            }
            if (bccomp($sellOrder['remaining_amount'], '0', 15) == -1) {
                $sellOrder['remaining_amount'] = '0';
            }
            // 创建交易记录
            $this->createTradeRecord($buyOrder, $sellOrder, $tradeAmount, $tradePrice);

            // 更新订单状态和库存
            $this->updateOrderStatus($buyOrder, $sellOrder);

            // 提交事务
            DB::commit();

            // 标记订单已匹配
            $this->markAsMatched($buyOrder['order_no'], $sellOrder['order_no']);

            // 执行 Redis 操作：删除已经完成的订单和库存等
            $this->executeRedisOperations($buyOrder, $sellOrder);

            // 记录成功日志
            $this->log()->info("交易撮合成功，买单: {$buyOrder['order_no']}, 卖单: {$sellOrder['order_no']}, 交易金额: $tradeAmount");
        } catch (Throwable  $e) {
            DB::rollBack();
            $this->log()->error("交易撮合失败，错误信息: {$e->getMessage()}", ['exception' => $e]);
        }
    }

    /**
     * 校验卖方余额是否足够
     */
    private function checkSellOrderBalance(int $order_no, float $amount): bool
    {
        $userInventory = $this->getUserInventory($order_no);

        return $userInventory >= $amount;
    }

    /**
     * 获取订单库存
     */
    private function getUserInventory(string $order_no): float
    {
        // 从数据库或者缓存中获取用户库存
        return Redis::Hget($this->inventoryKey, $order_no);

    }

    /**
     * 创建交易记录
     */
    private function createTradeRecord(array $buyOrder, array $sellOrder, float $tradeAmount, float $tradePrice): void
    {
        TradesOrderModel::create([
            'order_item' => order_no('buy_'),
            'buy_order_no' => $buyOrder['order_no'],
            'sell_order_no' => $sellOrder['order_no'],
            'amount' => $tradeAmount,
            'price' => $tradePrice,
            'user_id' => $buyOrder['user_id'],
            'entrust_type' => 'buy',
        ]);

        TradesOrderModel::create([
            'order_item' => order_no('sell_'),
            'buy_order_no' => $buyOrder['order_no'],
            'sell_order_no' => $sellOrder['order_no'],
            'amount' => $tradeAmount,
            'price' => $tradePrice,
            'user_id' => $sellOrder['user_id'],
            'entrust_type' => 'sell',
        ]);
    }

    /**
     * 更新订单状态和库存
     */
    private function updateOrderStatus(array &$buyOrder, array &$sellOrder): void
    {
        // 更新订单状态
        $buyOrderStatus = $buyOrder['remaining_amount'] > 0 ? 1 : 2; // 1: 部分成交, 2: 完全成交
        $sellOrderStatus = $sellOrder['remaining_amount'] > 0 ? 1 : 2;
        // 同步更新数据库中的订单状态
        C2cOrderModel::where('order_no', $buyOrder['order_no'])->update([
            'pay_status' => $buyOrderStatus,
            'remaining_amount' => $buyOrder['remaining_amount'],
        ]);
        C2cOrderModel::where('order_no', $sellOrder['order_no'])->update([
            'pay_status' => $sellOrderStatus,
            'remaining_amount' => $sellOrder['remaining_amount'],
        ]);

    }

    // 锁定订单：尝试获取一个订单的分布式锁

    /**
     * 标记订单已匹配
     */
    private function markAsMatched(string $buyOrderNo, string $sellOrderNo): void
    {
        Redis::sAdd($this->matchedOrdersKey . "$this->currency", "{$buyOrderNo}_$sellOrderNo");
    }

    /**
     * 执行 Redis 操作（删除已成交的订单和库存）
     */
    private function executeRedisOperations(array $buyOrder, array $sellOrder): void
    {
        $this->updateOrderInRedis($buyOrder, $this->buyOrdersKey);
        $this->updateOrderInRedis($sellOrder, $this->sellOrdersKey);
    }

    /**
     * 更新订单和库存状态
     */
    private function updateOrderInRedis(array $order, string $orderKey): void
    {
        $orderStatus = $order['remaining_amount'] > 0 ? 1 : 2;
        switch ($orderStatus) {
            case 1: // 部分成交，更新库存
                $this->updateInventory($order['order_no'], $order);
                break;
            case 2: // 完全成交，删除订单和库存记录
                $this->removeOrderAndInventory($order, $orderKey);
                break;
        }
    }

    /**
     * 更新库存
     */
    private function updateInventory(string $orderNo, array $order): void
    {
        Redis::hSet($this->inventoryKey, $orderNo, $order['remaining_amount']);
        Redis::hSet($this->ordersInfoKey, $orderNo, json_encode($order));
    }

    /**
     * 删除订单和库存记录
     */
    private function removeOrderAndInventory(array $order, string $orderKey): void
    {

        // 从有序集合中删除订单
        Redis::zRem("$orderKey:$this->currency", $order['order_no']);

        Redis::hDel($this->inventoryKey, $order['order_no']);
        // 删除缓存中的订单信息

        Redis::hDel($this->ordersInfoKey, $order['order_no']);
    }

    private function unlockOrder(string $lockKey): void
    {

        if (Redis::get($lockKey) == 1) {
            Redis::del($lockKey);
        }
    }

    /**
     * 校验买方余额是否足够
     */
    private function checkBuyOrderBalance(int $userId, float $amount, float $price): bool
    {
        $userBalance = $this->getUserBalance($userId);
        $requiredAmount = bcmul($amount, $price, 2);

        return $userBalance >= $requiredAmount;
    }

    /**
     * 获取用户余额
     */
    private function getUserBalance(int $userId): float
    {
        // 从数据库或者缓存中获取用户余额
        return 1000.0; // 示例数据
    }

    // 获取用户余额、库存等信息的辅助方法可以在这里实现

}
