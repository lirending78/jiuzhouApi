<?php

namespace Common;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Tests\TestCase;

class LogDatabaseTest extends TestCase
{
    /**
     * 测试是否能成功记录日志到数据库。
     * 1 创建相应的日志表 参照 base_logs 表 固定字段 uuid , level , message 其他字段自定义
     * 2 在config/logging 表中 添加你的日志通道参照 base_logs 通道设置
     * 测试运行 php artisan test --filter LogDatabaseTest
     * @return void
     */
    public function test_log_inserts_into_database()
    {

        // 准备测试数据
        $content = [   // array
            'extra'=> Str::random(10),
            'extra_b'=>Str::random(15),
        ];

        // 记录日志
        Log::channel('base_logs')->info('测试日志入库', $content);

        // 验证日志是否已经插入到数据库
        $this->assertDatabaseHas('base_logs', [
            'level' => 'INFO',  // 验证日志级别
            'extra' => $content['extra'],  // 验证 'extra' 字段数据
            'extra_b' => $content['extra_b'],  // 验证 'extra_b' 字段数据
        ]);
    }

}
