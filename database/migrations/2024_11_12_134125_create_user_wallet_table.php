<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWalletTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_wallet')) {
            Schema::create('user_wallet', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->nullable();
                $table->decimal('money')->default('0.000000000000000')->comment('现金/美元');
                $table->decimal('lock_money')->default('0.000000000000000')->nullable()->comment('锁定金额');
                $table->decimal('freeze_money')->default('0.000000000000000')->nullable()->comment('冻结金额');
                $table->integer('del_flag')->default('0')->nullable();
                $table->integer('version')->nullable();
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
        Schema::dropIfExists('user_wallet');
    }
}
