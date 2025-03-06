<?php

namespace App\Http\Middleware;

use App\Traits\ResponseApi;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Symfony\Component\HttpFoundation\Response;

class Realname
{
    use ResponseApi;
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    //认证过的用户才可以访问的接口
    public function handle(Request $request, Closure $next): Response
    {

        $authorization = $request->header('Authorization');
        if (empty($authorization)) {
            return $this->fail([],'Authorization header not found', 401);
        }
        //验证token是否有效
        try {
            auth()->authenticate();
            //验证用户是否实名认证过
            $user = auth()->user();
            if ($user->real_name_authority == 0) {
                return $this->fail([],'User not real name', 403);
            }

            return $next($request);
        } catch (AuthenticationException $e) {
            return $this->fail([],'Token is invalid', 401);
        }

    }




}
