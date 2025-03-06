<?php

use App\Http\Controllers\V1\Financial\FinancialController;
use Illuminate\Support\Facades\Route;
//
//use Illuminate\Routing\Route;




Route::prefix('financial')->middleware(['api','jwt' /*'sign','auth.api.token'*/])->group(function () {
   //充值
    Route::post('Recharge', [FinancialController::class, 'Recharge'])->name('recharge');
    //获取充值信息
    Route::post('GetRecharge', [FinancialController::class, 'GetRecharge'])->name('get_recharge');
    Route::post('RechargeList', [FinancialController::class, 'RechargeList'])->name('recharge_list');
    Route::post('EditRecharge', [FinancialController::class, 'EditRecharge'])->name('edit_recharge');
    //充值记录
    Route::post('RechargeRecord', [FinancialController::class, 'RechargeRecode'])->name('recharge_recode');
    //提现
    Route::post('Withdrawal', [FinancialController::class, 'Withdrawal'])->name('withdrawal');
    //提现记录
    Route::post('WithdrawalRecord', [FinancialController::class, 'WithdrawalRecord'])->name('withdrawal_record');
    //钱包
    Route::post('WalletList', [FinancialController::class, 'WalletList'])->name('wallet_list')->middleware('realname');
    //修改钱包提现地址
    Route::post('ChangeWalletWithdrawalAddress', [FinancialController::class, 'ChangeWalletWithdrawalAddress'])->name('change_wallet_withdrawal_address');
    Route::post('ChangeWallet', [FinancialController::class, 'ChangeWallet'])->name('change_wallet');
    Route::post('WalletDetail', [FinancialController::class, 'WalletDetail'])->name('wallet_detail');
    Route::post('GetRechargeAddress', [FinancialController::class, 'GetRechargeAddress'])->name('get_recharge_address');

});
