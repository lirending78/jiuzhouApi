<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseCmsChannelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_sms_channel', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name')->default('')->comment('通道名');
            $table->string('channel_sign')->unique()->default('')->comment('通道标识');
            $table->string('api_key')->default('');
            $table->string('api_secret')->default('');
            $table->string('api_url')->default('');
            $table->string('sort')->default('0')->comment('排序');
            $table->tinyInteger('is_active')->default('0')->comment('状态');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_cms_channel');
    }
}
