<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDepositAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_deposit_addresses')) {
            Schema::create('user_deposit_addresses', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->nullable();
                $table->string('currency')->nullable()->comment('币种');
                $table->string('address')->nullable();
                $table->integer('is_active')->nullable();
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
        Schema::dropIfExists('user_deposit_addresses');
    }
}
