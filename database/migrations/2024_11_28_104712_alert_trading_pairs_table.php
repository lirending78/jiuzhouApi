<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('trading_pairs', function (Blueprint $table) {
// 添加外键约束
            // 如果已有索引，先删除它们
            $table->dropIndex(['base_currency']);  // 删除单字段索引
            $table->dropIndex(['quote_currency']); // 删除单字段索引

            $table->decimal('volume', 30, 15)->default(0)->comment('交易量');
            $table->dropColumn(['min_trade_amount', 'max_trade_amount']); // 删除多个字段
            // 添加复合唯一索引
            $table->unique(['base_currency', 'quote_currency'], 'unique_trade_pair');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
//        Schema::table('trading_pairs', function (Blueprint $table) {
//            // 删除外键约束
//            $table->dropForeign(['base_currency']);
//            $table->dropForeign(['quote_currency']);
//
//            // 删除复合唯一索引
//            $table->dropUnique('unique_trade_pair');
//
//            // 恢复删除的字段
//            $table->addColumn('decimal', 'min_trade_amount')->default(0)->comment('最小交易量');
//            $table->addColumn('decimal', 'max_trade_amount')->default(0)->comment('最大交易量');
//        });
    }
};
