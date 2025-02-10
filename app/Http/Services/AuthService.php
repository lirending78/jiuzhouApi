<?php

namespace App\Http\Services;

use App\Http\Services\Common\SmsService;
use App\Http\Services\User\UserService;
use App\Models\User\User;
use App\Models\User\UserAuthentication;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;


class AuthService extends BaseService{
    protected string $logChannel = 'user';

    public function register($data)
    {

        $model = new \App\Models\User\User();
        if($data['code'] != 777888){
            if (!(new SmsService())->checkCode($data['user_mail'],$data['code'],'signup')) {
                throw new \Exception('验证码错误');
            }
        }

        if ($data->has('invitation_code')) {
            if(!(new UserService())->CheckUserCode($data['invitation_code'])){
                throw new \Exception('邀请码不存在');
            }
            $model->user_recom =  (new UserService())->GetUserId($data['invitation_code']);
        }
        if (admin_setting('invitation_code') == 1){
            //需要邀请码 //判断邀请码是否存在
            if (!isset($data['invitation_code']) || $data['invitation_code'] == '') {
                throw new \Exception('邀请码不能为空');
            }
        }
        $model->user_mobile = $data['user_mobile'];
        $model->login_password = bcrypt($data['password']);
        $model->user_mail = $data['user_mail'];
        $model->user_name = $data['user_name'];
        $model->user_code = (new UserService())->GetUserCode();
        $user_id =  (string) Uuid::uuid4();
        $model->user_id = $user_id;
        //注册ip
        $model->user_regip = (new UserService())->GetIp();
         //生成完整sql语句
        DB::enableQueryLog();
        if(!$model->save()){
            throw new \Exception('注册失败');
        }else{
            //生成钱包
//            (new UserService())->CreateWallet($user_id);
            //sql语句
            $data= $data->all();
            $data['password'] = '******';
            $data['confirm_password'] = '******';
            Log::channel('user')->info('注册成功', [
                'phone' => $data['user_mobile'],
                'data'=>json_encode($data),
                'sql'=> DB::getQueryLog()[0]['query'] ,
                'query_bindings' => json_encode(DB::getQueryLog()[0]['bindings']),
                'user_id'=>$user_id
            ]);
            //关闭sql日志
            DB::disableQueryLog();
        }
        //新用户user_id  邀请人invitation_code
        (new UserService())->updateUserNetwork($user_id, $data['invitation_code']??null);
        return ['user_id'=>$user_id,'user_mobile'=>$data['user_mobile'],'user_mail'=>$data['user_mail']];
    }




    public function Login($data)
    {

        $data->validate([
            'user_mail' => 'required|email',
            'password' => 'required|min:6|max:20',
        ],[
            'user_mail.required' => '邮箱不能为空',
            'user_mail.email' => '邮箱格式错误',
            'password.required' => '密码不能为空',
            'password.min' => '密码长度不能少于6位',
            'password.max' => '密码长度不能大于20位',
        ]);


        $user = \App\Models\User\User::where('user_mail', $data['user_mail'])->first();
        if (!$user) {
            throw new \Exception('用户不存在');
        }
        if (!$user->status) {
            Log::channel('user')->info('禁用用户尝试登录', [
                'user_mobile' => $user->user_mobile,
                'ip' => (new UserService())->GetIp(),
            ]);
            throw new \Exception('用户已被禁用');
        }
        if (!\Hash::check($data['password'], $user->login_password)) {
            Log::channel('user')->info('用户密码错误', [
                'user_mobile' => $user->user_mobile,
                'ip' => (new UserService())->GetIp(),
            ]);
            throw new \Exception('密码错误');
        }
        //用户登录
        //更新最后登录ip
        $user->user_lastip = (new UserService())->GetIp();
        $user->user_lasttime = date('Y-m-d H:i:s');
        $user->save();
        //登录日志
        Log::channel('user')->info('用户登录', [
            'user_mobile' => $user->user_mobile,
            'ip' => (new UserService())->GetIp(),
        ]);
        return (new UserService())->login($user);
    }

    public function LoginOut($data)
    {
        Log::channel('user')->info('用户退出', [
            'user_mobile' => auth()->user()->user_mobile,
            'ip' => (new UserService())->GetIp(),
        ]);
        auth()->logout();

    }


    public function ForgetPassword($data)
    {
            $user = \App\Models\User\User::where($data['type'], $data[$data['type']])->first();
            if (!$user) {
                throw new \Exception('用户不存在');
            }
            if (!$user->status) {
                Log::channel('user')->info('禁用用户尝试找回密码', [
                    'phone' => $user->user_mobile,
                    'ip' => (new UserService())->GetIp(),
                ]);
                throw new \Exception('用户已被禁用');
            }
            if($data['type'] == 'user_mobile'){
                if (!(new SmsService())->checkCode($data['user_mobile'],$data['code'],'reset_password')) {
                    throw new \Exception('验证码错误');
                }
            }
            if($data['type'] == 'user_mail'){
                if($data['code'] != 7778888){
                    //校验
                }
            }
            //验证码正确 修改密码
          DB::enableQueryLog();
            $user->login_password = bcrypt($data['password']);
            $user->save();
            Log::channel('user')->info('用户修改密码', [
                'data' => json_encode([$data['type'].':'.$data[$data['type']]]),
                'ip' => (new UserService())->GetIp(),
                'sql' => DB::getQueryLog()[0]['query'],
                'query_bindings' => json_encode(DB::getQueryLog()[0]['bindings']),
            ]);
        DB::disableQueryLog();
    }

    public function ChangePassword($data)
    {
        $user = auth()->user();
        if (!\Hash::check($data['old_password'], $user->login_password)) {
            throw new \Exception('旧密码错误');
        }
        //修改密码
        DB::enableQueryLog();
        $user->login_password = bcrypt($data['password']);
        $user->save();
        //退出登录
        auth()->logout();
        Log::channel('user')->info('用户修改密码', [
            'data' => json_encode([
                'user'=> $user->user_mobile,
            ]),
            'ip' => (new UserService())->GetIp(),
            'sql' => DB::getQueryLog()[0]['query'],
            'query_bindings' => json_encode(DB::getQueryLog()[0]['bindings']),
        ]);
        //关闭sql日志
        DB::disableQueryLog();
    }

    public function Authentication($data)
    {
        //上传身份证正面
        $model = new \App\Models\User\UserAuthentication();
        $model->user_id = auth()->user()->user_id;
        //检查是否认证 认证过了就更新
        $message = '用户实名认证';
        if ($model->where('user_id', auth()->user()->user_id)->first()) {
            $message = '用户修改认证信息';
            $model = $model->where('user_id', auth()->user()->user_id)->first();
            $model->status = 'pending';
//            User::query()->where('user_id', auth()->user()->user_id)->update(['real_name_authority' => 0]);
        }
        $model->nationality = $data['nationality'];
        $model->real_name = $data['real_name'];
        $model->id_number = $data['id_number'];
        //上传身份证正面
        $model->front_image = $data['api_front_image'];
        //上传身份证反面
        $model->back_image = $data['api_back_image'];
        //上传手持身份证照片
        $model->handheld_image = $data['api_handheld_image'];
        DB::enableQueryLog();
        $model->save();
        Log::channel('user')->info($message, [
            'data' => json_encode([
                'user'=> auth()->user()->user_mobile,
            ]),
            'ip' => (new UserService())->GetIp(),
            'sql' => DB::getQueryLog()[0]['query'],
            'query_bindings' => json_encode(DB::getQueryLog()[0]['bindings']),
        ]);
        DB::disableQueryLog();
    }


    public function GetAuthentication($data)
    {
        $user = auth()->user();
        $msg = UserAuthentication::query()->where('user_id', $user->user_id)->first();

        if ( $msg && $msg->status != 'success') {

            return \App\Models\User\UserAuthentication::where('user_id', $user['user_id'])
                ->get()
                ->transform(function ($item) {
                    $item->api_front_image =   $item->front_image;
                    $item->api_back_image =   $item->back_image;
                    $item->api_handheld_image =   $item->handheld_image;
                    $item->front_image = Storage::disk('admin')->url($item->front_image);
                    $item->back_image = Storage::disk('admin')->url($item->back_image);
                    $item->handheld_image = Storage::disk('admin')->url($item->handheld_image);
                    return $item;
                })
                ->first();

        } else if ($msg && $msg->status == 'success') {
            return '已认证';
        } else {
            return '未认证';
        }

    }


    public function getUserInfo($data)
    {
        $user = (new UserService())->getUserInfo();
        return $user;
    }


    public function avatar($data)
    {


        $user = auth()->user();
        User::query()->where('user_id', auth()->user()->user_id)->update(['avatar' => $data['avatar']]);
        if (!$user->save()) {
            throw new \Exception('保存失败');
        }else{
            Log::channel('user')->info('用户修改头像', [
                'data' => json_encode([
                    'user'=> auth()->user()->user_mobile,
                ]),
                'ip' => (new UserService())->GetIp(),
            ]);
            return $user->avatar;
        }
    }


}
