<?php

namespace App\Logging;

use Illuminate\Support\Facades\Log;
use Monolog\Handler\AbstractProcessingHandler;
use Illuminate\Support\Facades\DB;
use Monolog\Logger;
use Ramsey\Uuid\Uuid;
use Exception;
class DatabaseLoggerHandler extends AbstractProcessingHandler
{
    protected $table;
    protected $connection;

    /**
     * DatabaseLoggerHandler constructor.
     *
     * @param string $table
     * @param string $connection
     * @param int $level
     * @param bool $bubble
     */
    public function __construct($table = 'base_logs', $connection = 'mysql', $level = Logger::DEBUG, $bubble = true)
    {
        $this->table = $table;  // 默认日志表
        $this->connection = $connection;  // 默认数据库连接
        parent::__construct($level, $bubble);
    }

    /**
     * Write the record to the database.
     *
     * @param array|\Monolog\LogRecord $record
     * @return void
     */
    protected function write(array|\Monolog\LogRecord $record): void
    {
        try {
            Log::info('Writing log to database', ['record' => $record]);
            // 打印调试信息
            // 获取日志内容并格式化
            $formatted = $this->getFormatter()->format($record);
            // 动态构建日志数据
            $logData = [
                'uuid' => Uuid::uuid4(),
                'level' => $record['level_name'],  // 日志级别
                'message' => $formatted,  // 格式化后的日志消息
                'created_at' => now(),
                'updated_at' => now(),
            ];
            // 你可以根据日志内容动态添加更多字段
            if (isset($record['context'])) {
                foreach ($record['context'] as $key => $value) {
                    $logData[$key] = $value;
                }
            }
            // 插入到指定的数据库表
            DB::connection($this->connection)->table($this->table)->insert($logData);
        } catch (Exception $e) {
            // 捕获并记录异常
            Log::error('Error inserting log into database: ' . $e->getMessage());
            // 继续抛出异常，确保应用程序能够处理
            throw $e;
        }
    }
}
