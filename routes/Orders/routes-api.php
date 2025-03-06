<?php


use App\Http\Controllers\V1\Orders as C;
use App\Http\Controllers\V1\Orders\OrdersController;
use Illuminate\Support\Facades\Route;

Route::prefix('orders')->middleware(['api'])->group(function (){


    //需要登录
    Route::middleware(['jwt'])->group(function (){
        Route::post('/send-sell-order', [OrdersController::class, 'sendSellOrders'])->name('send_sell_order')->middleware('realname'); //发布卖出委托单
        Route::post('/send-buy-order', [OrdersController::class, 'sendBuyOrders'])->name('send_buy_order')->middleware('realname'); //发布买入委托单
        Route::post('/order-list', [OrdersController::class, 'OrderList'])->name('order_list'); //订单列表
        Route::post('/cancel-order', [OrdersController::class, 'cancelOrder'])->name('cancel_order')->middleware('realname'); //取消委托单
        Route::post('/orderDetail', [OrdersController::class, 'orderDetail'])->name('order_detail'); //订单详情
    });

    Route::post('get-trad-buy', [OrdersController::class, 'getTradBuy'])->name('get_trad_buy');

});
