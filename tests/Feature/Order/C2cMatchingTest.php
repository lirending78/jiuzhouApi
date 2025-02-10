<?php

namespace Order;

use App\Http\Services\Orders\C2cMatchingService;
use App\Models\Order\C2cOrderModel;
use App\Models\Order\TradesOrderModel;
use Illuminate\Support\Facades\Redis;
use Tests\TestCase;

class C2cMatchingTest extends TestCase
{
    /**
     * A basic feature test example.
     *  ProcessMatchingJob::dispatch($currency);  //队列启动
     *
     */
    public function test_c2c_matching_logic(): void
    {
        // 捕获所有异常，便于调试
        $this->withoutExceptionHandling();
        // 定义测试币种
        $currency = 'BTC/USDT';

            // 清理测试环境
            Redis::flushdb();
            C2cOrderModel::truncate();
            TradesOrderModel::truncate();
//            C2cOrderModel::unsetEventDispatcher();
            // 批量创建买单
            $buyOrders = C2cOrderModel::factory()
                ->count(10) // 创建 100 个买单
                ->state([
                    'currency' => $currency,
                    'order_type' => 'buy',
                    'pay_status' => 0,
                ])
                ->create();
            // 批量创建卖单
            $sellOrders = C2cOrderModel::factory()
                ->count(10) // 创建 100 个卖单
                ->state([
                    'currency' => $currency,
                    'order_type' => 'sell',
                    'pay_status' => 0,
                ])
                ->create();
            // 将订单信息添加到 Redis，使用自定义的排序逻辑
            foreach ([$buyOrders, $sellOrders] as $orders) {
                foreach ($orders as $order) {
                    $this->addOrderToRedis($order);
                }
            }
            // 调用撮合逻辑
            $matchingService = app(C2cMatchingService::class);
            $matchingService->matchOrders($currency);

        // 1. 检查交易记录是否存在
        $tradeCount = TradesOrderModel::count();
        $this->assertGreaterThan(0, $tradeCount, '撮合后应有成交的交易记录');

        // 2. 检查订单状态是否更新
        $unfinishedOrders = C2cOrderModel::where('pay_status', 2)->count();
        $this->assertGreaterThan(0, $unfinishedOrders, '.订单应已完成撮合');

    }

    private function addOrderToRedis($order)
    {
        $entrustType = $order->order_type;
        $unitPrice = $order->unit_price;

        // 计算 priceScore，放大价格
        $priceScore = bcmul($unitPrice, 1e6, 0); // 转为整数，避免精度丢失

        // 计算 timeScore，缩小时间戳，保留 10 位小数
        $timeScore = bcdiv($order->created_at->timestamp, 1e10, 10);

        // 根据订单类型计算分数
        if ($entrustType === 'buy') {
            // 买单：价格高优先，时间早优先
            $score = bcsub($priceScore, $timeScore, 10);
        } else {
            // 卖单：价格低优先，时间早优先
            $score = bcadd($priceScore, $timeScore, 10);
        }

        // 将订单添加到 Redis 有序集合
        Redis::zAdd("c2c_orders:{$entrustType}:{$order->currency}", (float)$score, $order->order_no);

        // 将订单库存存入 Redis
        Redis::hSet(ORDER_INVENTORY, $order->order_no, $order->remaining_amount);
    }
}
