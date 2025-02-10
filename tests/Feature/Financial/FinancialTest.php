<?php

namespace Tests\Feature\Financial;

use Tests\TestCase;

class FinancialTest extends TestCase
{
    protected static $accessToken = null;


    protected function getToken(): string
    {
        // 如果 Token 已经缓存，直接返回
        if (self::$accessToken) {
            return self::$accessToken;
        }

        // 调用登录接口
        $payload = [
            'user_mobile' => '18272622100',
            'password' => '123456',
        ];

        $response = $this->json('POST', '/api/Login', $payload);

        $responseData = $response->json();

        // 检查登录是否成功
        if (!isset($responseData['code']) || $responseData['code'] !== 0) {
            $this->fail("登录失败，code：{$responseData['code']}，message：{$responseData['message']}");
        }
        // 缓存 Token
        self::$accessToken = $responseData['data']['access_token'];
        // 返回 Token
        return self::$accessToken;
    }

    //新建充值订单
    public function test_Recharge()
    {
        $recharge_credentials = \Illuminate\Http\UploadedFile::fake()->image('handheld_image.jpg');
        $payload = [
            'recharge_type' => 'USTD',
            'num'=>1.00111,
            'recharge_credentials' => $recharge_credentials
        ];
        $headers = [
            'Authorization' => 'Bearer '.$this->getToken(),
        ];
        $response = $this->withHeaders($headers)->json('POST', '/api/financial/Recharge', $payload);
        $responseData = $response->json();
        if ($responseData['code'] == 1){
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}}");
        }else{
            $response->assertJsonStructure([
                'code',  // 是否成功
                'message',  // 接口返回的消息
                'data' => [ // 返回的数据

                ],
            ]);
            // 可选：进一步断言具体的返回值
            $response->assertJson([
                'code' => 0,
                'message' => 'success',
            ]);
        }
    }



    ////新建提现订单


    public function test_Withdrawal()
    {
        $recharge_credentials = \Illuminate\Http\UploadedFile::fake()->image('handheld_image.jpg');
        $payload = [
            'currency' => 'USTD',
            'cash_amount'=>0.1,
            'withdrawal_credentials' => $recharge_credentials,
            'withdrawal_account' => '1111111111',
        ];
        $headers = [
            'Authorization' => 'Bearer '.$this->getToken(),
        ];
        $response = $this->withHeaders($headers)->json('POST', '/api/financial/Withdrawal', $payload);
        $responseData = $response->json();
        if ($responseData['code'] == 1){
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}}");
        }else{
            $response->assertJsonStructure([
                'code',  // 是否成功
                'message',  // 接口返回的消息
                'data' => [ // 返回的数据
                ],
            ]);
            // 可选：进一步断言具体的返回值
            $response->assertJson([
                'code' => 0,
                'message' => 'success',
            ]);
        }
    }





















}
