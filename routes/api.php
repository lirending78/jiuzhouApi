<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//引入路由

require_once 'user/routes-api.php';
require_once 'Common/routes-api.php';
require_once 'Orders/routes-api.php';
require_once 'news/routes-api.php';
require_once 'financial/routes-api.php';

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

