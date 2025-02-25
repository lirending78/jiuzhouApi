<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

    'paths' => ['api/*'], // 只允许 API 跨域
    'allowed_methods' => ['*'], // 允许所有请求方法
    'allowed_origins' => ['*'], // 允许所有来源
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'], // 允许所有请求头
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => false,

];
