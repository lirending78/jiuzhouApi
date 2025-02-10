<?php

namespace Tests\Feature\User;

use Tests\TestCase;

class UserTest extends TestCase
{
    protected static $accessToken = null;


    protected function getToken(): string
    {
        // 如果 Token 已经缓存，直接返回
//        if (self::$accessToken) {
//            return self::$accessToken;
//        }

        // 调用登录接口
        $payload = [
            'user_mobile' => '18272622102',
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


    //生成手机号
    function generatePhoneNumbers(int $count = 1): array
    {
        $validNumbers = [];

        // 手机号前缀（中国手机号）
        $prefixes = ['13', '14', '15', '16', '17', '18', '19'];

        while (count($validNumbers) < $count) {
            // 随机选择一个前缀
            $prefix = $prefixes[array_rand($prefixes)];

            // 随机生成剩下的 9 位数字
            $number = $prefix . str_pad(random_int(0, 999999999), 9, '0', STR_PAD_LEFT);

            // 确保生成的手机号符合正则（可选验证）
            if (preg_match('/^1[3-9]\d{9}$/', $number)) {
                $validNumbers[] = $number;
            }
        }
        return $validNumbers;
    }

    public function test_add_user()
    {
        $user_num = 3;
        for ($i = 0; $i < $user_num; $i++) {
            $user_mobile = $this->generatePhoneNumbers()[0];
            $user_mail = $this->generatePhoneNumbers()[0] . '@qq.com';
            $user_name = '第三次测试用户' . $i;
            $this->test_register($user_mobile, $user_mail, $user_name);
        }

    }


    /**
     * A basic feature test example.
     */
    public function test_register($user_mobile = '18272622100',$user_mail = '1746310132@qq.com',$user_name = '测试用户'): void
    {

        $payload = [
            'password' => '111111', // 暂定格式为六位纯数字
            'confirm_password' => '111111',
            'user_mobile' => $user_mobile, // 模拟唯一手机号
            'user_mail' => $user_mail, // 模拟唯一邮箱
            'code' => '777888', // 模拟验证码 暂定为 777888
            'invitation_code' => '19590829', // 可选项  暂定为user_code
            'user_name' => $user_name,
        ];


        $response = $this->json('POST', '/api/register', $payload);
        $responseData = $response->json();

        if ($responseData['code'] == 1){
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}}");
        }else{
            $response->assertJsonStructure([
                'code',  // 是否成功
                'message',  // 接口返回的消息
                'data' => [ // 返回的数据
                    'user_id',   // 注册用户的 ID
                    'user_mobile',
                    'user_mail',
                ],
            ]);
            // 可选：进一步断言具体的返回值
            $response->assertJson([
                'code' => 0,
                'message' => 'success',
            ]);
            // 检查数据库中是否成功插入数据
            $this->assertDatabaseHas('user', [
                'user_mobile' => $payload['user_mobile'],
                'user_mail' => $payload['user_mail'],
            ]);
        }
    }

    public function test_login()
    {
        $payload = [
            'user_mobile' => '18272622102',
            'password'=>'333333'
        ];
        $response = $this->json('POST', '/api/Login', $payload);

        $responseData = $response->json();
        if ($responseData['code'] == 1){
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}}");
        }else{
            $response->assertJsonStructure([
                'code',  // 是否成功
                'message',  // 接口返回的消息
                'data' => [ // 返回的数据
                    'access_token',
                    'token_type',
                    'expires_in',
                ],
            ]);
            // 可选：进一步断言具体的返回值
            $response->assertJson([
                'code' => 0,
                'message' => 'success',
            ]);
            // jwt检查是否登录成功
            $this->assertNotEmpty($responseData['data']['access_token'], 'Access token 为空，登录失败');
        }

    }


    public function test_LoginOut()
    {
        $headers = [
            'Authorization' => 'Bearer '.$this->getToken(),
        ];
        $response = $this->withHeaders($headers)->json('POST', '/api/user/LoginOut', []);
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

    public function test_ForgetPassword()
    {
        $payload = [
            'type' => 'user_mobile',  //找回密码校验类型   user_mobile 手机号   user_mail 邮箱
            'user_mobile' => '18272622102',
//            'user_mail' => '1746310132@qq.com',
            'password' => '123456',
            'confirm_password' => '123456',
            'code' => 777888, //验证码 暂定为 777888
        ];

        $response = $this->json('POST', '/api/ForgetPassword', $payload);
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


    public function test_ChangePassword()
    {
        $payload = [
            'old_password' => '333333',//旧密码
            'password' => '123456',
            'confirm_password' => '123456',
        ];
        $headers = [
            'Authorization' => 'Bearer '.$this->getToken(),
        ];

        $response = $this->withHeaders($headers)->json('POST', '/api/user/ChangePassword', $payload);
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

    //用户初级认证
    public function test_Authentication()
    {
        // 模拟上传的文件
        $frontImage = \Illuminate\Http\UploadedFile::fake()->image('front_image.jpg');
        $backImage = \Illuminate\Http\UploadedFile::fake()->image('back_image.jpg');
        $handheldImage = \Illuminate\Http\UploadedFile::fake()->image('handheld_image.jpg');
        $payload = [
            'nationality' => 'cn', //国籍
            'real_name' => '你猜333', //真实姓名
            'id_number' => '421674687123589',//身份证号
            'front_image' => $frontImage, // 身份证正面
            'back_image' => $backImage, // 身份证反面
            'handheld_image' => $handheldImage, // 手持身份证
        ];
        $headers = [
            'Authorization' => 'Bearer '.$this->getToken(),
        ];
        $response = $this->withHeaders($headers)->json('POST', '/api/user/Authentication', $payload);
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
            // 检查数据库中是否成功插入数据、
            $this->assertDatabaseHas('user_authentication', [
                'real_name' => $payload['real_name'],
                'id_number' => $payload['id_number'],
            ]);
        }
    }

    public function test_GetAuthentication()
    {
        $headers = [
            'Authorization' => 'Bearer ' . $this->getToken(),
        ];
        $response = $this->withHeaders($headers)->json('POST', '/api/user/GetAuthentication', []);
        $responseData = $response->json();
        if ($responseData['code'] == 1) {
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}}");
        } else {
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
                'data' => array(),
            ]);

        }
    }












}
