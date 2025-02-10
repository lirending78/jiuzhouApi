<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('news')) {
            Schema::create('news', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('title')->nullable()->comment('标题');
                $table->string('description')->nullable()->comment('描述');
                $table->text('content')->nullable()->comment('内容');
                $table->timestamp('display_time')->nullable()->comment('显示时间');
                $table->timestamp('deleted_at')->nullable()->comment('删除时间');
                $table->timestamp('created_at')->nullable()->comment('创建时间');
                $table->timestamp('updated_at')->nullable()->comment('修改时间');
                $table->string('order')->nullable();
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
        Schema::dropIfExists('news');
    }
}
