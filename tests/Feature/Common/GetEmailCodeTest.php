<?php

namespace Common;

use App\Cache\User\OauthCache;
use Tests\TestCase;

class GetEmailCodeTest extends TestCase
{
    /**
     *
     * 测试运行 php artisan test --filter GetMsgCodeTest
     */
    public function test_send_email_code()
    {
        // 捕获所有异常
        $this->withoutExceptionHandling();
        // 模拟请求数据
        $requestData = [
            'message_type' => 'signup', // 替换为有效的测试手机号
            'email' => '452591453@qq.com', // 替换为有效的测试手机号
        ];
        $response = $this->postJson('/api/common/get-email-code',$requestData);
        // 如果响应状态码不是 200，输出响应内容
        if ($response->status() !== 200) {
            $response->dump(); // 或者使用 $response->dd(); 来中断测试并输出
        }
        $responseData = $response->json();
        // 根据 code 字段进行判断
        if ($responseData['code'] === 0) {
            // code 为 0，表示成功
            // 输出成功结果
            echo "成功：{$responseData['message']}\n";

            // 继续进行断言
            $response->assertStatus(200);
            $this->assertEquals('验证码发送成功', $responseData['message']);

            // 检查验证码是否已缓存
            $cachedCode = unserialize(OauthCache::getMessageCode($requestData['email'], $requestData['message_type']));
            $this->assertNotNull($cachedCode, 'Verification code was not cached.');
            $this->assertIsArray($cachedCode, 'Verification code should be an array.');
        } else {
            // code 不为 0，表示出现错误
            // 输出错误信息并使测试失败
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}");
        }

    }
}
