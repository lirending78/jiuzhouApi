<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserNetworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('user_network')) {
            Schema::create('user_network', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('ancestor_id')->default('');
                $table->string('descendant_id')->default('');
                $table->integer('level');
                $table->timestamps();
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
        Schema::dropIfExists('user_network');
    }
}
