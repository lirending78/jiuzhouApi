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
        Schema::table('trading_pairs', function (Blueprint $table) {
            $table->decimal('min_trade_amount',30,15)->default(0)->comment('最小交易数量');
            $table->decimal('max_trade_amount',30,15)->default(0)->comment('最大交易数量');
            $table->dropColumn(['volume']); // 删除多个字段

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
