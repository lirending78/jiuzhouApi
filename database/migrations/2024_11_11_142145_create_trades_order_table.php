<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradesOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('trades_order')) {
            Schema::create('trades_order', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('order_item')->default('')->comment('订单号');
                $table->string('buy_order_no')->default('')->comment('买入订单号');
                $table->string('sell_order_no')->default('')->comment('卖出订单号');
                $table->string('user_id', 36)->default('')->comment('用户id');
                $table->string('amount')->default('')->comment('数量');
                $table->decimal('price', 30, 15)->default(0)->comment('单价');
                $table->enum('entrust_type', ['buy', 'sell'])->default('sell')->comment('委托类型: buy买,sell卖');
                $table->timestamps();
                $table->softDeletes();
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
        Schema::dropIfExists('trades_order');
    }
}
