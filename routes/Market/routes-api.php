<?php

use App\Http\Controllers\V1\Financial\FinancialController;
use Illuminate\Support\Facades\Route;
//
//use Illuminate\Routing\Route;




Route::prefix('market')->middleware(['api','jwt' /*'sign','auth.api.token'*/])->group(function () {
    Route::post('get-current-price', [\App\Http\Controllers\V1\Market\MarketController::class, 'GetCurrentPrice'])->name('get-current-price');

});
