<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('user_id', 36)->default('')->comment('代理商用户id');
            $table->string('agent_name')->default('')->comment('代理商名称');
            $table->string('mobile')->default('0')->comment('代理商手机');
            $table->string('type')->default('')->comment('代理商类型');
            $table->tinyInteger('status')->default('1')->comment('代理商状态  1-未激活 2-已激活 3-已关闭');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agents');
    }
};
