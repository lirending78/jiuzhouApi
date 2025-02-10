<?php

namespace App\Http\Requests\User\Member;

use App\Http\Requests\BaseRequest;

class MemberRequest extends BaseRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return match ($this->route()->getName()) {
            'register'=>[
                'user_mobile'=>['required', 'unique:App\Models\User\User,user_mobile'],
                'user_mail'=>['required','email','unique:App\Models\User\User,user_mail'],
                'password'=>'required|min:6|max:12',
                'confirm_password'=>'required|min:6|max:12|same:password',
                'code'=>'required|digits:6',
            ],
            'forget_password' => [
                'type'=>['required'],
                'user_mobile'=>['exists:App\Models\User\User,user_mobile'],
                'user_mail' => ['exists:user,user_mail'],
                'password'=>'required|min:6|max:12',
                'confirm_password'=>'required|min:6|max:12|same:password',
                'code'=>'required|digits:6',
            ],
            'change_password' => [
                'old_password' => 'required',
                'password' => 'required|min:6|max:12',
                'confirm_password' => 'required|min:6|max:12|same:password',
            ],
            'authentication' => [
                    'nationality' => 'required',
                    'real_name' => 'required',
                    'id_number' => 'required',
                    'api_front_image' => 'required',
                    'api_back_image' => 'required',
                    'api_handheld_image' => 'required',
            ],
            'avatar'=>[
                'avatar' => 'required|max:2048',
                ],
//            'login' => [
//                'user_mobile' => [
//                    'required',
//                ],
//                'password' => 'required|min:6|max:20',
//            ],
             default => []
        };
    }
    public function messages()
    {
        return [
            'user_mobile.required' => '手机号不能为空',
            'user_mobile.unique' => '手机号已存在',
            'user_mail.required' => '邮箱不能为空',
            'user_mail.email' => '邮箱格式不正确',
            'user_mail.unique' => '邮箱已存在',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能少于6位',
            'password.max' => '密码长度不能超过12位',
            'confirm_password.required' => '确认密码不能为空',
            'confirm_password.min' => '确认密码长度不能少于6位',
            'confirm_password.max' => '确认密码长度不能超过12位',
            'confirm_password.same' => '两次密码输入不一致',
            'code.required' => '验证码不能为空',
            'code.digits' => '验证码格式不正确',
            'type.required' => '类型不能为空',
            'user_mobile.exists' => '手机号不存在',
            'user_mail.exists' => '邮箱不存在',
            'old_password.required' => '旧密码不能为空',
            'avatar.required' => '头像不能为空',



        ];

    }


}
