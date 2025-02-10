<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {

        if (!Schema::hasTable('agent_admin_users')) {
            Schema::create('agent_admin_users', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('username', 120)->unique();
                $table->string('password', 80);
                $table->string('name');
                $table->string('avatar')->nullable();
                $table->string('remember_token', 100)->nullable();
                $table->timestamps();
            });
        }
        if (!Schema::hasTable('agent_admin_menu')) {
            Schema::create('agent_admin_menu', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->bigInteger('parent_id')->default(0);
                $table->integer('order')->default(0);
                $table->string('title', 50);
                $table->string('icon', 50)->nullable();
                $table->string('uri', 50)->nullable();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('agent_admin_menu')) {

            Schema::table('agent_admin_menu', function (Blueprint $table) {
                $table->tinyInteger('show')->default(1)->after('uri');
                $table->string('extension', 50)->default('')->after('uri');
            });
        }
        if (!Schema::hasTable('agent_admin_roles')) {
            Schema::create('agent_admin_roles', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name', 50);
                $table->string('slug', 50)->unique();
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('agent_admin_permissions')) {
            Schema::create('agent_admin_permissions', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name', 50);
                $table->string('slug', 50)->unique();
                $table->string('http_method')->nullable();
                $table->text('http_path')->nullable();
                $table->integer('order')->default(0);
                $table->bigInteger('parent_id')->default(0);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('agent_role_users')) {
            Schema::create('agent_role_users', function (Blueprint $table) {
                $table->bigInteger('role_id');
                $table->bigInteger('user_id');
                $table->unique(['role_id', 'user_id']);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('agent_role_permissions')) {
            Schema::create('agent_role_permissions', function (Blueprint $table) {
                $table->bigInteger('role_id');
                $table->bigInteger('permission_id');
                $table->unique(['role_id', 'permission_id']);
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('agent_role_menu')) {
            Schema::create('agent_role_menu', function (Blueprint $table) {
                $table->bigInteger('role_id');
                $table->bigInteger('menu_id');
                $table->unique(['role_id', 'menu_id']);
                $table->timestamps();
            });
        }

        if (!Schema::hasTable('agent_permission_menu')) {
            Schema::create('agent_permission_menu', function (Blueprint $table) {
                $table->bigInteger('permission_id');
                $table->bigInteger('menu_id');
                $table->unique(['permission_id', 'menu_id']);
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('agent_admin_menu');
        Schema::dropIfExists('agent_permission_menu');
        Schema::dropIfExists('agent_role_menu');
        Schema::dropIfExists('agent_role_permissions');
        Schema::dropIfExists('agent_role_users');
        Schema::dropIfExists('agent_admin_permissions');
    }
};
