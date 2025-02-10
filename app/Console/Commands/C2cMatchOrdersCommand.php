<?php

namespace App\Console\Commands;

use App\Http\Services\Orders\C2cMatchingService;
use Illuminate\Console\Command;

class C2cMatchOrdersCommand extends Command
{
    // 定义命令名称
    protected $signature = 'c2c:match-orders {currency}';

    // 定义命令描述
    protected $description = '执行C2C撮合订单逻辑';

    // 实例化 C2cMatchingService
    protected $matchingService;

    public function __construct(C2cMatchingService $matchingService)
    {
        parent::__construct();
        $this->matchingService = $matchingService;
    }

    // 命令的执行逻辑
    public function handle()
    {
        // 从命令行参数中获取币种
        $currency = $this->argument('currency');
        // 调用撮合方法
        $this->matchingService->matchOrders($currency);

        // 输出执行结果
        $this->info("撮合逻辑已执行完成,币种：{$currency}");
    }
}
