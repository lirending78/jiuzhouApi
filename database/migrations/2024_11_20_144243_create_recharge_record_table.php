<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRechargeRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_recharge_record')) {
            Schema::create('user_recharge_record', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->default('');
                $table->string('recharge_type')->default('')->comment('币种');
                $table->string('recharge_credentials')->default('')->nullable()->comment('充值凭证');
                $table->string('status')->default(null)->nullable();
                $table->decimal('num', 30, 15)->default('0')->comment('数量');
                $table->string('refused_msg')->nullable()->comment('拒绝原因');
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
        Schema::dropIfExists('recharge_record');
    }
}
