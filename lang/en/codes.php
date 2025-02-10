<?php


return [

    /*
    |--------------------------------------------------------------------------
    | Pagination Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used by the paginator library to build
    | the simple pagination links. You are free to change them to anything
    | you want to customize your views to better match your application.
    |
    */

    /**
     * 按模块区分不同状态码和返回信息码
     */
    '402' => 'Please verify your real name first',

    // 用户模块，1开头
    '10001' => 'The user already exists',
    '10002' => 'The referrer does not exist',
    '10003' => 'The user does not exist',
    '10004' => 'Login failed, please check the username or password',
    '10005' => 'Registration failed',
    '10006' => 'Registration is successful',
    '10008' => 'The original password is incorrect',
    '10009' => 'Failed to change the password',
    '10010' => 'The password was successfully changed',

    '10014' => 'The referral code is incorrect',
    '10016' => 'Login successful',
    '10017' => 'The mobile phone number has been registered',

    '10020' => 'The verification code is sent successfully',
    '10021' => 'Please resend the verification code',
    '10022' => 'The verification code failed to be verified',
    '10023' => 'The verification code failed to be sent',
    '10024' => 'There are too many verification code errors, please get it again',
    '10025' => 'Captcha caching failed :01',


    // 全局
    '80001' => 'Network error,Please try again later',
    '80002' => 'The signature did not pass',
    '80003' => 'Token verification failed',
    '80004' => 'Data not found',
    '80005' => 'Don t click repeatedly',
    '80006' => 'the parameter is incorrect',


];
