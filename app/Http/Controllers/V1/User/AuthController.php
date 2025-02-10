<?php

namespace App\Http\Controllers\V1\User;

use App\Http\Controllers\BaseController;
use App\Http\Requests\User\Member\MemberRequest;
use App\Http\Services\AuthService;

class AuthController extends BaseController
{


    //获取用户信息
    public function getUserInfo(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->getUserInfo($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }

    //更新用户头像
    public function avatar(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->avatar($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }

    //用户注册
    public function register(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->register($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }



    //用户登录
    public function Login(MemberRequest $request)
    {

        try {
            $auth = new AuthService();
            $response = $auth->Login($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }


    //用户退出登录
   public function LoginOut(MemberRequest $request)
   {
       try {
            $auth = new AuthService();
            $response = $auth->LoginOut($request);
            return $this->success($response);
       }catch (\Tymon\JWTAuth\Exceptions\UserNotDefinedException $e){
           return $this->fail([],$e->getMessage());
       }
   }

   //用户忘记密码
   public function ForgetPassword(MemberRequest $request)
   {
       try {
            $auth = new AuthService();
            $response = $auth->ForgetPassword($request);
            return $this->success($response);
       }catch (\Exception $e){
           return $this->fail([],$e->getMessage());
       }
   }


   //用户修改密码
    public function ChangePassword(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->ChangePassword($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }

    //用户初级实名认证
    public function Authentication(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->Authentication($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }

    //获取用户初级实名认证信息
    public function GetAuthentication(MemberRequest $request)
    {
        try {
            $auth = new AuthService();
            $response = $auth->GetAuthentication($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }

}
