<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateC2cOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('c2c_order')) {
            Schema::create('c2c_order', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('order_no')->default('')->comment('订单号');
                $table->string('user_id', 36)->default('')->comment('用户id');
                $table->enum('entrust_type', ['buy', 'sell'])->default('sell')->comment('委托类型: buy买,sell卖');
                $table->string('order_type')->default('')->comment('订单类型: DC数字货币, ETF基金, WH 外汇, CO大宗交易');
                $table->string('amount')->default('')->comment('订单总数量');
                $table->string('remaining_amount')->default('')->comment('订单未成交数量');
                $table->decimal('total_price', 30, 15)->default('0')->comment('委托价格总价');
                $table->decimal('unit_price', 30, 15)->default('0')->comment('委托价格单价');
                $table->string('currency')->default('')->comment('交易币种：IDR_USDT .....');
                $table->decimal('currency_ratio', 30, 15)->default(0)->comment('币种比率');
                $table->tinyInteger('pay_type')->default(0)->comment('支付方式：待定 1：钱包');
                $table->tinyInteger('pay_status')->default(0)->comment('订单状态（0:待匹配,1:部分成交, 2:完全成交 3:主动取消等）');
                $table->timestamp('cancel_time')->nullable()->comment('订单取消时间');
                $table->timestamp('closes_time')->nullable()->comment('订单关闭时间');
                $table->timestamp('handle_time')->nullable()->comment('最近处理时间');
                $table->json('order_param')->nullable()->comment('订单补充信息');
                $table->integer('trade_count')->nullable()->default(0)->comment('订单的匹配次数，每次部分成交或完全成交增加 1');
                $table->unique(['order_no', 'user_id']);
                $table->softDeletes();
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('c2c_order');
    }
}
