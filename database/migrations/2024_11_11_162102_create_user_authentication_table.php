<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAuthenticationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user_authentication')) {
            Schema::create('user_authentication', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->nullable()->comment('用户user_id');
                $table->string('nationality')->nullable()->comment('国籍');
                $table->string('real_name')->nullable()->comment('真实姓名');
                $table->string('id_number')->nullable()->comment('身份证号');
                $table->string('front_image')->nullable()->comment('身份证正面');
                $table->string('back_image')->nullable()->comment('身份证反面');
                $table->string('handheld_image')->nullable()->comment('手持照片');
                $table->string('refused_msg')->nullable()->comment('拒绝原因');
                $table->integer('status')->nullable()->comment('1:成功');
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
        Schema::dropIfExists('user_authentication');
    }
}
