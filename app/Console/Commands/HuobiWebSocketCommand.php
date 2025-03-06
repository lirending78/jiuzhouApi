<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\HuobiWebSocketService;

class HuobiWebSocketCommand extends Command
{
    protected $signature = 'huobi:ws';
    protected $description = '启动火币 WebSocket 监听器';

    public function handle()
    {
        $service = new HuobiWebSocketService();
        $service->start();
    }
}
