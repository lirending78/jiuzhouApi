<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Response; // 使用 Laravel 的 Response

class AjaxCors
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
//        Log::info('Request Headers:', $request->headers->all());
        $response = $next($request);
        // 确保 Response 对象是 Laravel 响应
        if (!$response instanceof Response) {
            $response = response($response->getContent(), $response->getStatusCode());
        }
        return $response->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Origin, Content-Type, Authorization, X-Requested-With')
            ->header('Access-Control-Allow-Credentials', 'true');

    }
}
