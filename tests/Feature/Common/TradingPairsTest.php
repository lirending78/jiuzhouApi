<?php

namespace Common;

use App\Models\Fund\TradingPairCategoryModel;
use App\Models\Fund\TradingPairModel;
use Tests\TestCase;

class TradingPairsTest extends TestCase
{
    public function test_get_trading_pairs_page()
    {

        $this->withoutExceptionHandling();

//        $categories = TradingPairCategoryModel::factory()->count(5)->create([
//            'status' => 1, // 启用状态
//        ]);
//
//        // 为每个分类生成多个交易对
//        foreach ($categories as $category) {
//            TradingPairModel::factory()->count(10)->create([
//                'trading_pair_categories' => $category->uuid, // 关联分类
//                'status' => 1, // 启用状态
//            ]);
//        }

        // 模拟请求数据
        $requestData = [
            'page' => -1, // 替换为有效的测试手机号
            'page_size' => 10, // 替换为有效的测试手机号
        ];
        $response = $this->postJson('/api/common/get-trading-pairs',$requestData);
        // 如果响应状态码不是 200，输出响应内容
        if ($response->status() !== 200) {
            $response->dump(); // 或者使用 $response->dd(); 来中断测试并输出
        }
        $responseData = $response->json();
        if ($responseData['code'] === 0) {
            // code 为 0，表示成功
            // 输出成功结果
            // 输出响应内容（用于调试）
            echo "成功：" . json_encode($responseData, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) . "\n";


            // 继续进行断言
            $response->assertStatus(200);
        } else {
            // code 不为 0，表示出现错误
            // 输出错误信息并使测试失败
            $this->fail("接口返回错误，code：{$responseData['code']}，message：{$responseData['message']}");
        }
    }
}
