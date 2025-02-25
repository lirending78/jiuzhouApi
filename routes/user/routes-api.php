<?php

use App\Http\Controllers\V1\User\AuthController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Routing\Route;


Route::post('register', [AuthController::class, 'register'])->name('register');
Route::get('RegisterSendCode', [AuthController::class, 'RegisterSendCode'])->name('register_send_code');
Route::post('Login', [AuthController::class, 'Login'])->name('login');
Route::post('ForgetPassword', [AuthController::class, 'ForgetPassword'])->name('forget_password');


Route::prefix('user')->middleware(['api','jwt' /*'sign','auth.api.token'*/])->group(function () {
    Route::post('LoginOut', [AuthController::class, 'LoginOut'])->name('login_out');
    Route::post('ChangePassword', [AuthController::class, 'ChangePassword'])->name('change_password');
    Route::post('Authentication', [AuthController::class, 'Authentication'])->name('authentication');
    Route::post('GetAuthentication', [AuthController::class, 'GetAuthentication'])->name('get_authentication');
    Route::post('GetUserInfo', [AuthController::class, 'GetUserInfo'])->name('get_user_info');
    Route::post('Avatar', [AuthController::class, 'Avatar'])->name('avatar');

    Route::post('test', [AuthController::class, 'test'])->name('test1111');
});
Route::prefix('account')->middleware(['api','jwt' /*'sign','auth.api.token'*/])->group(function () {
    Route::post('get-balance', [AuthController::class, 'GetBalance'])->name('get-balance');

});
