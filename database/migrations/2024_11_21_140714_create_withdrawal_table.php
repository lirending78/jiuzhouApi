<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWithdrawalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('withdrawal')) {
            Schema::create('withdrawal', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->default('');
                $table->decimal('decimal', 30, 15)->default('0')->comment('金额');
                $table->string('withdrawal_account')->default('');
                $table->enum('status', ['pending', 'completed', 'failed', 'cancelled'])->default('pending')->comment('completed。已处理', 'pending，待处理', 'failed。失败', 'cancelled，取消');
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
        Schema::dropIfExists('withdrawal');
    }
}
