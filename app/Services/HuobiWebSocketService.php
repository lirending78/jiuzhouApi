<?php

namespace App\Services;

use Workerman\Worker;
use Workerman\Connection\AsyncTcpConnection;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class HuobiWebSocketService
{
    protected $wsUrl = 'ws://api.huobi.pro/ws';
    public function start()
    {
        $worker = new Worker();

        $worker->onWorkerStart = function() {
            $this->connectToHuobi();
        };

        Worker::runAll();
    }

    protected function connectToHuobi()
    {
        $connection = new AsyncTcpConnection($this->wsUrl);

        $connection->onConnect = function($conn) {
            Log::info("✅ WebSocket 连接成功: {$this->wsUrl}");

            // 订阅 BTC/USDT 的最新行情
            $message = json_encode([
                'sub' => 'market.btcusdt.ticker',
                'id'  => time()
            ]);
            $conn->send($message);
        };

        $connection->onMessage = function($conn, $data) {
            $decoded = gzdecode($data); // 火币的数据是 gzip 压缩的
            $jsonData = json_decode($decoded, true);

            if (isset($jsonData['ping'])) {
                // 处理 Ping，发送 Pong 响应
                $conn->send(json_encode(['pong' => $jsonData['ping']]));
            } elseif (isset($jsonData['tick'])) {
                // 获取最新的价格信息
                $price = $jsonData['tick']['close'] ?? 0;
                Redis::set('huobi:BTCUSDT', $price);
                Log::info("🔥 BTC 价格更新: $price");
            }
        };

        $connection->onError = function($conn, $err_code, $err_msg) {
            Log::error("🔥 WebSocket 连接错误: $err_code - $err_msg");
        };

        $connection->onClose = function($conn) {
            Log::warning("⚠️ WebSocket 连接关闭，尝试重连...");
            $this->connectToHuobi();
        };

        $connection->connect();
    }
}
