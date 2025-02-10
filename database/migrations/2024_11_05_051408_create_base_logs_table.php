<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_logs', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('level');  // 日志级别
            $table->text('message');  // 日志消息
            $table->string('extra');  // 可选的额外信息（如上下文）
            $table->string('extra_b');  // 可选的额外信息（如上下文）
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_logs');
    }
};
