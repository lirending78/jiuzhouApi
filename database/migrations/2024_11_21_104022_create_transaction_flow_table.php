<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionFlowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('transaction_flow')) {
            Schema::create('transaction_flow', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('transaction_no')->default('');
                $table->decimal('amount', 30, 15)->default('0')->comment('金额');
                $table->string('currency')->default('')->comment('ex:USTD');
                $table->string('transaction_type')->default('')->comment('充值：deposit  提现：withdrawal    购买：purchase');
                $table->string('status')->default('pending')->comment('pending 已处理');
                $table->string('payment_method')->default('')->comment('Manual recharge ：人工充值');
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
        Schema::dropIfExists('transaction_flow');
    }
}
