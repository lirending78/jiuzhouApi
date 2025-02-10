<?php

use App\Admin\Controllers as C;
use Dcat\Admin\Admin;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Mosiboom\DcatIframeTab\Controllers\IframeController;
use App\Admin\Renderable\WalletDetail;

Admin::routes();


Route::get('/admin/UserWalletDetail', [WalletDetail::class, 'handle'])->name('UserWalletDetail');

Route::group([
    'prefix' => config('admin.route.prefix'),
    'namespace' => config('admin.route.namespace'),
    'middleware' => config('admin.route.middleware'),
], function (Router $router) {
    $router->get('tinymcemedia', 'TinymceMediaController@index')->name('tinymcemedia.index');
    $router->get('/', [IframeController::class, 'index']);
    // 仪表盘
    $router->get('/dashboard', 'HomeController@index');
    $router->resource('user_mange', 'UserController');
    $router->resource('news', 'NewsController');
    $router->resource('base-setting', 'BaseSettingController');
    $router->resource('user_authentication', 'UserAuthenticationController');
    $router->resource('c2cOrder', 'C2cOrderController');
    $router->resource('order_trade', 'TradesOrderController');
    $router->resource('admin_setting', 'SettingController');
    $router->resource('user_type', 'UserTypeController');
    $router->resource('recharge_record', 'RechargeRecordController');
    $router->resource('transaction_flow', 'TransactionFlowController');
    $router->resource('withdrawal', 'WithdrawalController');
    $router->resource('trading-pair', 'TradingPairController');
    $router->resource('trading-pair-cate', 'TradingPairCategoryController');
    $router->resource('wallet', 'UserWalletController');
    $router->resource('trading', 'TradingController');
    $router->resource('currency', 'WalletCurrencyController');
//    $router->resource('UserWalletDetail','WalletDetailController');
    $router->resource('currencies', C\CurrencyController::class);


});
