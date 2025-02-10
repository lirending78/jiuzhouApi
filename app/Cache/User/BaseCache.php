<?php

namespace App\Cache\User;

use Illuminate\Support\Facades\Redis;
use JetBrains\PhpStorm\Pure;

class BaseCache
{
    const PROJECT_USER_KEY_PREFIX = 'dm';

    public static string $block = 'common';

    /**
     * 开启事务
     *
     * @return void
     */
    public static function multi()
    {
        Redis::multi();
    }

    /**
     * 提交事务
     *
     * @return void
     */
    public static function exec()
    {
        Redis::exec();
    }

    /**
     * exists
     *
     * @param string $padding
     * @return bool
     */
    public static function exists(string $padding): bool
    {
        $key = self::getKeyWithPadding($padding);

        return Redis::exists($key);
    }

    /**
     * set
     *
     * @param string $padding
     * @param mixed $value
     * @param int|null $seconds 缓存时间
     * @param string|null $resolution nx=>只在键不存在时才设置，xx=>只在键存在时才设置
     * @param string|null  $flag
     * @return int|bool|$this
     */
    public static function set(
        string $padding,
        mixed $value,
        int|null $seconds = null,
        string|null $resolution = 'nx',
        string|null  $flag = 'ex'
    ): int|bool|Object
    {
        if (is_array($value)) {
            $value = json_encode($value);
        }

        $key = self::getKeyWithPadding($padding);

        if ($seconds === null || $seconds < 1) {
            $resolution = $flag = null;
        }

        return Redis::set($key, $value, $flag, $seconds, $resolution);
    }

    /**
     * get
     *
     * @param string $padding
     * @return string|null
     */
    public static function get(string $padding): string|null
    {
        $key = self::getKeyWithPadding($padding);

        return Redis::get($key);
    }

    /**
     * hSet
     *
     * @param string $padding
     * @param string $field
     * @param string $value
     * @return int|bool
     */
    public static function hSet(string $padding, string $field, string $value): int|bool
    {
        $key = self::getKeyWithPadding($padding);

        return Redis::hSet($key, $field, $value);
    }

    /**
     * hGet
     *
     * @param string $padding
     * @param string $field
     * @return string|null
     */
    public static function hGet(string $padding, string $field): string|null
    {
        $key = self::getKeyWithPadding($padding);

        return Redis::hGet($key, $field);
    }

    /**
     * 生成key
     *
     * @param String $padding
     * @return String
     */
    #[Pure] public static function getKeyWithPadding(string $padding): string
    {
        return self::getKey(self::$block, $padding);
    }

    /**
     * 组装键名
     *
     * @param array $keys
     * @return string
     */
    public static function getKey(... $keys): string
    {
        $key = implode(':', $keys);

        if (getenv('APP_DEBUG') === 'true') {
            return 'debug:' . self::PROJECT_USER_KEY_PREFIX . ':' . $key;
        } else {
            return self::PROJECT_USER_KEY_PREFIX . ':' . $key;
        }
    }
}
