<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_logs')) {
                Schema::create('user_logs', function (Blueprint $table) {
                    $table->uuid()->primary();
                    $table->string('level')->default('');
                    $table->text('message');
                    $table->string('phone')->nullable();
                    $table->string('code')->nullable();
                    $table->json('data')->nullable();
                    $table->string('sql')->nullable();
                    $table->json('query_bindings')->nullable();
                    $table->string('ip')->nullable();
                    $table->string('user_mobile')->nullable();
                    $table->string('user_id')->nullable();
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
        Schema::dropIfExists('user_logs');
    }
}
