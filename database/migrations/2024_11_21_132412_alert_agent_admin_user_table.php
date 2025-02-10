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
        Schema::table('agent_admin_users', function (Blueprint $table) {
            $table->string('agent_id', 36)->default('')->comment('代理商id');
            $table->string('agent_user_id', 36)->default('')->comment('代理商用户id');
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
