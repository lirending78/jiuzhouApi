<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

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
        Log::info('Request Headers:', $request->headers->all());
        $response = $next($request);
        return $response->withHeaders([
            'Access-Control-Allow-Origin' => '*',
            'Access-Control-Allow-Methods' => 'GET, POST, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers' => 'Content-Type, Authorization',
        ]);
    }
}
