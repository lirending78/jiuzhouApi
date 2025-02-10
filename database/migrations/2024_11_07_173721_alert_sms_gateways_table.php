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
        if (Schema::hasTable('sms_gateways')) {
            Schema::table('sms_gateways', function (Blueprint $table) {
                $table->integer('sort')->default(0)->nullable(false)->comment('排序');
                $table->tinyInteger('status')->nullable(false)->default(0)->comment('状态');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('sms_gateways')) {
            Schema::dropIfExists('sms_gateways');
        }
    }
};
