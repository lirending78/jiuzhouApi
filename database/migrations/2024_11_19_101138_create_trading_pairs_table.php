<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradingPairsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_pairs', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('base_currency',20)->index()->comment('基础货币，如 BTC');
            $table->string('quote_currency',20)->index()->comment('计价货币，如 USDT');
            $table->string('symbol',20)->unique()->comment('交易对符号，如 BTC/USDT');
            $table->decimal('min_trade_amount',30,15)->default(0)->comment('最小交易数量');
            $table->decimal('max_trade_amount',30,15)->default(0)->comment('最大交易数量');
            $table->decimal('min_trade_price',30,15)->default(0)->comment('最小交易价格');
            $table->decimal('max_trade_price',30,15)->default(0)->comment('最大交易价格');
            $table->tinyInteger('status')->default(0)->comment('是否禁用');
            $table->integer('sort')->default(0)->comment('排序');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['status','sort']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trading_pairs');
    }
}
