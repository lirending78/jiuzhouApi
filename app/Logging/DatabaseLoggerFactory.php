<?php

namespace App\Logging;

use Monolog\Logger;

class DatabaseLoggerFactory
{
    /**
     * 创建并返回一个定制的 Monolog 记录器实例。
     *
     * @param array $config
     * @return \Monolog\Logger
     */
    public function __invoke(array $config)
    {
        // 创建一个新的 Monolog 实例
        $logger = new Logger('database_logger');

        // 使用自定义的处理器
        $logger->pushHandler(new DatabaseLoggerHandler(
            $config['table'], // 从配置中获取表名
            $config['connection'], // 从配置中获取数据库连接
            Logger::toMonologLevel($config['level'] ?? 'debug') // 转换日志级别
        ));

        return $logger;
    }
}
