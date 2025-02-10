<?php

namespace App\Http\Middleware;

use App\Traits\ResponseApi;
use Closure;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
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
            auth()->authenticate($authorization);
//            $uuid = $request->header('uuid','默认值11111111');
            $request->offsetSet('user_id', auth()->user()->user_id);

            return $next($request);
        } catch (AuthenticationException $e) {
            return $this->fail([],'Token is invalid', 401);
        }

    }
}
