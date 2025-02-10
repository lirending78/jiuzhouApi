<?php

use App\Models\Agent\AgentAdminUsers;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Dcat\Admin\Admin;
use Mosiboom\DcatIframeTab\Controllers\IframeController;

Admin::routes();

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');
});


Route::group([
    'prefix' => config('agent-admin.route.prefix'),
    'namespace' => config('agent-admin.route.namespace'),
    'middleware' => config('agent-admin.route.middleware'),
], function (Router $router) {
    $router->get('/', [IframeController::class, 'index']);
    // 仪表盘
    $router->get('/dashboard', 'HomeController@index');


});

