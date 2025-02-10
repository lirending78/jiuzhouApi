<?php


use App\Http\Controllers\V1\Orders as C;
use App\Http\Controllers\V1\Orders\OrdersController;
use Illuminate\Support\Facades\Route;

Route::prefix('orders')->middleware(['api'])->group(function (){


    //需要登录
    Route::middleware(['jwt'])->group(function (){
        Route::post('/send-sell-order', [OrdersController::class, 'sendSellOrders'])->name('send_sell_order'); //发布卖出委托单
        Route::post('/send-buy-order', [OrdersController::class, 'sendBuyOrders'])->name('send_buy_order'); //发布买入委托单
    });

    Route::post('get-trad-buy', [OrdersController::class, 'getTradBuy'])->name('get_trad_buy');

});
