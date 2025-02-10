<?php

namespace Database\Factories\Fund;
use App\Models\Fund\TradingPairCategoryModel;

use Illuminate\Database\Eloquent\Factories\Factory;
class TradingPairCategoryModelFactory extends Factory
{
    protected $model = \App\Models\Fund\TradingPairCategoryModel::class;

    public function definition()
    {
        do {
            $name = $this->faker->currencyCode; // 随机生成基础货币

        } while (TradingPairCategoryModel::query()->where('name', $name)->exists()); // 检查是否已存在

        return [
            'name' => $name,
            'description' => $this->faker->sentence,
            'sort' => $this->faker->numberBetween(1, 100),
            'status' => $this->faker->randomElement([0, 1]), // 0: 禁用, 1: 启用
        ];
    }
}
