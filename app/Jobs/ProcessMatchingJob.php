<?php

namespace App\Jobs;

use App\Http\Services\Orders\C2cMatchingService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redis;

class ProcessMatchingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $tries = 3;  // 最大重试次数
    public $timeout = 120;  // 超时时间
    protected string $currency;


    // 构造函数，接收币种作为参数
    public function __construct(string $currency)
    {
        $this->currency = $currency;

    }
    /**
     * 队列任务的入口方法，负责执行队列任务的逻辑
     */
    public function handle(C2cMatchingService $matchingService)
    {
        // 记录日志，表示任务处理开始
        // 'job_id' 可以帮助识别和跟踪任务
        Log::channel('c2c_order')->info('开始处理队列任务', [
            'job_id' => $this->job->getJobId(),
            'timestamp' => now()
        ]);
            // 处理撮合逻辑
            try {


                if ($this->currency) {
                    // 将币种任务添加到队列，执行撮合
                    Log::channel('c2c_order')->info('成功匹配订单', [
                        'job_id' => $this->job->getJobId(),
                    ]);
                    $matchingService->matchOrders($this->currency);
                } else {
                    Log::channel('c2c_order')->info('没有币种需要撮合');
                    return;
                }

            } catch (\Exception $e) {
                // 错误处理
                Log::channel('c2c_order')->error('撮合失败', [
                    'job_id' => $this->job->getJobId(),
                    'error' => $e->getMessage(),
                ]);
            }
            // 休眠一段时间，避免CPU占用过高
            // sleep(1);
        // 任务完成，队列消费停止
        Log::channel('c2c_order')->info('队列任务已完成', [
            'job_id' => $this->job->getJobId(),
            'timestamp' => now(),
        ]);
    }

}
