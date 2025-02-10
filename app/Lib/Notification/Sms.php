<?php

namespace App\Lib\Notification;


use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;
use Notification;
use Overtrue\EasySms\EasySms;
use Weiwait\DcatEasySms\Models\SmsConfig;
use Weiwait\DcatEasySms\Models\SmsGateway;

class Sms {
    public static string $prefix = 'sms_common_';

    /**
     * 初始化账号Client
     *
     * @return object
     */
    public static function createClient(): object
    {

        $config = [
            'timeout' => SmsConfig::get('timeout', 5),
            // 默认发送配置
            'default' => [
                // 网关调用策略，默认：顺序调用
                'strategy' => \Overtrue\EasySms\Strategies\OrderStrategy::class,

                // 默认可用的发送网关
                'gateways' => [
                    SmsConfig::get('gateway')
                ],
            ],
            'gateways' => array_merge([
                'file' => '/tmp/easy-sms.log',
            ], SmsGateway::gateways()),
        ];
        return new EasySms($config);
    }

    /**
     * 单个发送短信
     *
     * @param string $mobile
     * @param string $message_code
     * @param string $channel
     * @return bool
     */
    public static function send(string $mobile, string $message_code,string $channel): bool
    {

        try {
            //todo 未完成待接入服务商
            return true;
            //根据通道获取不同密钥
            // 发送短信验证码
            $response = self::createClient()->send($mobile, [
                'content'  => function($gateway){
                    if ($gateway->getName() == 'yunpian') {
                        return '云片专用验证码：1235';
                    }
                    return '您的验证码为: 6379';
                },
                'template' => function($gateway){
                    if ($gateway->getName() == 'aliyun') {
                        return 'TP2818';
                    }
                    return 'SMS_001';
                },
                'data' => function($gateway){
                    return [
                        'code' => 6379
                    ];
                },
            ],[$channel]);

            dd($response);


                return true;

        } catch (\Exception $e) {
            Log::error('发送短信错误：'.$e->getMessage(), [
                'mobile' => $mobile,
                'code' => $message_code,
            ]);
            return false;
        }
    }

    /**
     * 批量发送短信
     *
     * @param array $mobile
     * @param string $message_code
     * @return void
     */
    public static function sendBatch(array $mobile, string $message_code): void
    {
        try {
            $client = self::createClient(getenv('SMS_ACCESS_KYE_ID'), getenv('SMS_ACCESS_KYE_SECRET'));
            $request = new SendSmsRequest(
                [
                    'phoneNumbers' => json_encode($mobile),
                    'signName' => json_encode(getenv('SMS_SIGN_NAME')),
                    'templateCode' => getenv('SMS_TEMPLATE_CODE'),
                    'templateParam' => json_encode(
                        [
                            'code' => $message_code
                        ]
                    )
                ]
            );

            // 发送短信验证码
            $client->sendBatchSms($request);
        } catch (\Exception $e) {
            Log::channel('member')->error('群发短信', json_decode($e->getMessage(), true));
        }
    }

    /**
     * 验证短信
     * @param $phone
     * @param $code
     * @return bool
     */
    static function checkCode($phone, $code): bool
    {
        $key = self::$prefix . $phone;
        $redis_code = Redis::get($key);
        if ($redis_code != $code) {
            Log::channel('sms')->error("阿里短信验证失败", [
                'phone' => $phone,
                'input_code' => $code,
                'redis_code' => $redis_code,
            ]);
            return false;
        }
        Redis::delete($key);
        return true;
    }
}
