<?php

namespace App\Http\Middleware;

use App\Traits\ResponseApi;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\Response;

class JwtMiddleware
{
    use ResponseApi;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {



        $authorization = $request->header('Authorization');
        if (empty($authorization)) {
            return $this->fail([],'Authorization header not found', 401);
        }
        //验证token是否有效
        try {
            auth()->authenticate();
//            $uuid = $request->header('uuid','默认值11111111');
            $request->offsetSet('user_id', auth()->user()->user_id);
            //判断是否登录中 单点登录
//            $isLogin = $this->checkLogin($request);
//            if (!$isLogin) {
//                return $this->fail([],'别处登录', 402);
//            }

            return $next($request);
        } catch (AuthenticationException $e) {
//            return $this->fail([],$e->getMessage(), 401);
            return $this->fail([],'Token is invalid', 401);
        }

    }

    /**
     * 检查是否登录中 单点登录
     * @param Request $request
     * @return bool
     */
    protected function checkLogin(Request $request)
    {

        // 传过来的 Token
        $token = str_replace('Bearer ', '', $request->header('Authorization'));
        $token = str_replace('bearer ', '',$token);
        // 从 Redis 中获取 Token
        $redisToken = Redis::get('LoginToken:' . auth()->user()->user_id);
        // 如果 Redis 中的 Token 和传过来的 Token 不一致，说明用户已经在其他地方登录
        if ($redisToken !== $token) {
            return false; // 直接返回 false，不要更新 Redis 中的 Token
        }
        return true;
    }


}
