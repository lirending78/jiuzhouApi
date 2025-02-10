<?php


use App\Http\Controllers\V1\Common as C;
use Illuminate\Support\Facades\Route;


Route::prefix('common')->middleware([ /*'sign','auth.api.token'*/])->group(function () {
    Route::get('/get-msg-code', [C\SmsController::class, 'getMessageCode'])->name('get_message_code'); //发送验证码
    Route::post('/check-code', [C\SmsController::class, 'checkCodes'])->name('check_code'); //验证码校验
    Route::post('/get-email-code', [C\EmailController::class, 'sendEmail'])->name('get_email_code'); //获取邮件验证码
    Route::post('/check-email-code', [C\EmailController::class, 'checkCodes'])->name('check_email_code'); //邮件验证码校验

    Route::post('/get-trading-pairs', [C\TradingPairsController::class, 'getTradingPairs'])->name('get_trading_pairs'); //获取交易对

    // 文件上传路由
    Route::post('/upload-file', [C\FileController::class, 'upload'])->name('upload_file');

});
