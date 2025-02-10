<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTradingPairCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trading_pair_categories', function (Blueprint $table) {
            $table->uuid()->primary();
            $table->string('name')->unique()->default('')->comment('分类名称');
            $table->string('description')->nullable()->comment('分类描述');
            $table->integer('sort')->default(0)->comment('排序');
            $table->tinyInteger('status')->index()->default(0)->comment('状态');
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
        Schema::dropIfExists('trading_pair_categories');
    }
}
