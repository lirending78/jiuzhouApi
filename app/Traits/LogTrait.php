<?php


namespace App\Traits;


use Illuminate\Support\Facades\Log;
use Psr\Log\LoggerInterface;

/**
 * Class LogTrait
 * @package App\Traits
 */
trait LogTrait
{
    /**
     * @param string $logChannel
     * @return LoggerInterface
     */
    public function log(string $logChannel = ''): LoggerInterface
    {
        return Log::channel($logChannel ?: config('logging.default'));
    }
}