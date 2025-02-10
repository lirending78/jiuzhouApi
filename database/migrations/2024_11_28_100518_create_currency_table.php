<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrencyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('currency', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name')->default('')->comment('名称');
            $table->string('network')->default('')->comment('网络');
            $table->integer('status_recharge')->comment('充值是否开启');
            $table->string('status_withdrawal')->default('')->comment('提现是否开启');
            $table->string('address')->default('')->comment('地址');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('currency');
    }
}
