<?php

namespace Common;

use Tests\TestCase;

class CheckEmailMsgCodeTest extends TestCase
{
    /**
     * 测试运行 php artisan test --filter GetMsgCodeTest
     */
    public function test_check_email_code()
    {
        // 捕获所有异常
        $this->withoutExceptionHandling();
        // 模拟请求数据
        $requestData = [
            'email' => '452591453@qq.com', // 替换为有效的测试手机号
            'message_type' => 'signup', // 替换为有效的测试手机号
            'code' => '350682', // 通用测试验证码777888
        ];
        $response = $this->postJson('/api/common/check-email-code', $requestData);
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
        } else {
            // code 不为 0，表示出现错误
            // 输出错误信息并使测试失败
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}");
        }

    }
}
