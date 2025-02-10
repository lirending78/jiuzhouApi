<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('user')) {
            Schema::create('user', function (Blueprint $table) {
                $table->uuid()->primary();
                $table->string('user_id')->nullable();
                $table->string('user_name')->nullable()->comment('用户名');
                $table->string('real_name')->nullable()->comment('真实姓名');
                $table->integer('user_level')->default('1')->nullable()->comment('会员等级');
                $table->string('user_mail')->nullable()->comment('用户邮箱');
                $table->string('login_password')->nullable()->comment('登录密码');
                $table->string('safe_password')->nullable()->comment('资金密码');
                $table->string('user_mobile')->nullable()->comment('手机号码');
                $table->string('user_regip')->nullable()->comment('注册IP');
                $table->dateTime('user_lasttime')->nullable()->comment('最后登录时间');
                $table->string('user_lastip')->nullable()->comment('最后登录IP');
                $table->string('user_recom')->nullable()->comment('推荐人');
                $table->integer('status')->default('1')->comment('状态 1 正常 0 无效');
                $table->string('user_code')->nullable()->comment('用户编号');
                $table->tinyInteger('real_name_authority')->default('0')->nullable()->comment('实名认证');
                $table->string('remarks')->nullable()->comment('备注');
                $table->integer('is_online')->nullable()->comment('是否在线');
                $table->integer('is_lock')->nullable()->comment('锁定用户  不可下单和提现');
                $table->integer('documentary_status')->nullable()->comment('跟单状态');
                $table->string('user_type')->default('')->comment('用户类型');
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
        Schema::dropIfExists('user');
    }
}
