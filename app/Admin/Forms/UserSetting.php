<?php

namespace App\Admin\Forms;

use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;

class UserSetting extends Form
{

    public $title = '用户设置';
    // 处理请求
    public function handle(array $input)
    {
        if ($input['user_register_type'] == []) {
            return $this->response()->error('最少选择一项');
        }
        admin_setting($input);
        return $this->response()->success('设置成功')->refresh();
    }

    public function form(): void
    {
        $this->radio('invitation_code')->options(['0' => '关闭邀请码', '1' => '开启邀请码'])->default(admin_setting('invitation_code'));
        //用户注册校验方式
        $this->checkbox('user_register_type')->options(['user_mail' => '邮箱注册', 'user_mobile' => '手机号注册'])->default(admin_setting('user_register_type'))->help('用户注册时，可选择邮箱或手机号注册');

    }


}
