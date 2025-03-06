<?php

use Workerman\Worker;
use Illuminate\Support\Facades\Redis;
require_once __DIR__ . '/../vendor/autoload.php';

// 创建 WebSocket 服务器，监听 8282 端口
$ws_worker = new Worker("websocket://0.0.0.0:8282");


// 设置进程数（建议根据服务器配置调整）
$ws_worker->count = 1;

// 当客户端连接时触发
$ws_worker->onConnect = function ($connection) {
    echo "✅ 客户端已连接\n";
};
$ws_worker->onMessage = function($connection, $data) {
    echo "📩 收到前端推送的市场数据: $data\n";



    $connection->send("✅ 数据接收成功");
};
// 当客户端断开连接时触发
$ws_worker->onClose = function ($connection) {
    echo "❌ 客户端断开连接\n";
};


Worker::runAll();
