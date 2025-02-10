<?php

namespace Database\Factories\Order;

use App\Models\Order\C2cOrderModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Ramsey\Uuid\Uuid;

class C2cOrderModelFactory extends Factory
{
    protected $model = C2cOrderModel::class;

    public function definition()
    {
        // 生成随机的单价，范围在 1 到 100，精确到 15 位小数
        $unitPrice = $this->faker->randomFloat(15, 1, 100);

        // 生成随机的数量，范围在 0.0001 到 10，精确到 8 位小数
        $quantity = $this->faker->randomFloat(15, 0.0001, 10);

        // 使用 BCMath 计算总价，保留 23 位小数（15 + 8）
        $totalPrice = bcmul($unitPrice, $quantity, 23);

        return [
            'order_no' => order_no(),
            'user_id' => Uuid::uuid4(),
            'currency' => 'BTC',
            'amount' => $quantity, // 数量在 0.1 到 5 之间
            'remaining_amount' => $quantity, // 数量在 0.1 到 5 之间
            'total_price' => $totalPrice,
            'unit_price' => $unitPrice,
            'order_type' => 'DC',
            'entrust_type' => $this->faker->randomElement(['buy', 'sell']),
            'pay_status' => 1, // 订单状态，1 表示未成交
            // 添加其他必要的字段
            'currency_ratio'=>'0.2',
            'pay_type'=>1,
            'trade_count'=>0
        ];
    }
}
