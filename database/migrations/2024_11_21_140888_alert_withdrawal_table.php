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
        Schema::table('withdrawal', function (Blueprint $table) {
            $table->string('withdrawal_order_num')->default('');
            $table->string('withdrawal_credentials')->default('')->comment('凭证');
            $table->string('refused_msg')->nullable()->comment('拒绝原因');
            $table->string('current')->comment('类型');
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
