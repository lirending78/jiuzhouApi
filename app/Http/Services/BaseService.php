<?php

namespace App\Http\Services;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;
use Throwable;

class  BaseService
{
    protected string $logChannel;
    protected string $modelClass;


    public function beginTransaction(): void
    {
        DB::beginTransaction();
    }

    public function commit(): void
    {
        DB::commit();
    }

    public function rollback(): void
    {
        DB::rollBack();
    }
    /**
     * 拼接异常日志
     * @param $functionName
     * @param Throwable $e
     * @param array $arr
     * @return void
     */
    public function recordExceptionLog(
        $functionName,
        Throwable $e,
        array $arr = []
    ): void {
        $this->log()->error(sprintf("方法：%s， 文件：%s， 行数：%s， 错误信息：%s，",
            $functionName, $e->getFile(), $e->getLine(),
            $e->getMessage()), $arr ?: request()->all());
    }

    public function log(): LoggerInterface
    {
        return Log::channel($this->logChannel ?: config('logging.default'));
    }

}
