<?php

namespace App\Console\Commands;

use App\Jobs\ProcessMatchingJob;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Redis;

class C2cMatchingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'c2c-matching';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // 指定不同币种并调度队列任务
        $currencies = ['IDR_USDT','BTC', 'ETH', 'USDT'];  // todo 后续从数据库中拿
        // 添加币种到队列
        Redis::rPush(MATCH_CURRENCY, 'IDR_USDT');

        $this->info('C2C 搓币');
    }

}
