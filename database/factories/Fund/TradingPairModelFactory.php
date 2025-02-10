<?php

namespace Database\Factories\Fund;

use App\Models\Fund\TradingPairModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class TradingPairModelFactory extends Factory
{
    protected $model = \App\Models\Fund\TradingPairModel::class;

    public function definition()
    {
        do {
            $baseCurrency = $this->faker->currencyCode; // 随机生成基础货币
            $quoteCurrency = $this->faker->currencyCode; // 随机生成计价货币
            $symbol = "{$baseCurrency}/{$quoteCurrency}";
        } while (TradingPairModel::where('symbol', $symbol)->exists()); // 检查是否已存在

        return [
            'base_currency' => $baseCurrency,
            'quote_currency' => $quoteCurrency,
            'symbol' => "{$baseCurrency}/{$quoteCurrency}", // 自动拼接生成 symbol
            'min_trade_amount' => $this->faker->randomFloat(8, 0.001, 1),
            'max_trade_amount' => $this->faker->randomFloat(8, 1, 10),
            'min_trade_price' => $this->faker->randomFloat(15, 0.1, 1000),
            'max_trade_price' => $this->faker->randomFloat(15, 1000, 100000),
            'sort' => $this->faker->numberBetween(1, 100),
            'status' => 1,
            'trading_pair_categories' => null,
            'symbol_url' => [
                $this->faker->imageUrl()
            ],
        ];
    }
}
