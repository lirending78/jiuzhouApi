<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if(!Schema::hasTable('agent_role_users')) {
            Schema::create('agent_role_users', function (Blueprint $table) {
                $table->bigInteger('role_id');
                $table->bigInteger('user_id');
                $table->unique(['role_id', 'user_id']);
                $table->timestamps();
            });
        }


    }

    public function down(): void
    {
        Schema::dropIfExists('agent_role_users');

    }
};
