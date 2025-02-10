<?php

namespace App\Cache\User;

use Illuminate\Support\Facades\Redis;

class OauthCache extends BaseCache
{
    private const HASH_KEY_MEMBER_ID = 'member_id';
    private const HASH_KEY_REFRESH_TOKEN = 'refresh_token';

    /**
     * 缓存短信验证码
     *
     * @param string $mobile
     * @param string $code
     * @param string $type
     * @return bool
     */
    public static function setMessageCode(string $mobile, string $code, string $type = ''): bool
    {
        return self::setValue(md5($mobile), $code, $type);
    }

    /**
     * 获取缓存的短信验证码
     *
     * @param string $mobile
     * @param string $type
     * @return string|null
     */
    public static function getMessageCode(string $mobile, string $type): string|null
    {
        return self::getValue(md5($mobile), $type);
    }

    /**
     * 删除缓存的短信验证码
     *
     * @param string $mobile
     * @param string $type
     * @return bool
     */
    public static function delMessageCode(string $mobile, string $type): bool
    {
        $key = self::getKeyWithPadding(md5($mobile), 'message:code:for:' . $type);

        return Redis::del($key);
    }

    /**
     * 缓存短信验证码校验错误次数
     *
     * @param string $mobile
     * @param int $times
     * @param string $type
     * @return bool
     */
    public static function setCodeErrorTimes(string $mobile, int $times, string $type = ''): bool
    {
        return self::setValue(md5($mobile), $times, $type . ':error:times');
    }

    /**
     * 获取短信验证码校验错误次数
     *
     * @param string $mobile
     * @param string $type
     * @return string|null
     */
    public static function getCodeErrorTimes(string $mobile, string $type): string|null
    {
        return self::getValue(md5($mobile), $type . ':error:times');
    }

    /**
     * 获取短信验证码校验错误次数
     *
     * @param string $mobile
     * @param string $type
     * @return string|null
     */
    public static function delCodeErrorTimes(string $mobile, string $type): string|null
    {
        $key = self::getKeyWithPadding(md5($mobile), 'message:code:for:' . $type . ':error:times');

        return Redis::del($key);
    }

    /**
     * 删除用户信息
     * @param string $device_uuid
     * @return bool
     */
    public static function delMemberCache(string $device_uuid): bool
    {
        $key = self::getKeyWithPadding($device_uuid);

        return Redis::del($key);
    }

    /**
     * 缓存member_id
     *
     * @param string $device_uuid
     * @param int $member_id
     * @return bool
     */
    public static function setMemberId(string $device_uuid, int $member_id): bool
    {
        return self::hSetValue($device_uuid, self::HASH_KEY_MEMBER_ID, $member_id);
    }

    /**
     * 获取缓存的member_id
     *
     * @param string $device_uuid
     * @return string|null
     */
    public static function getMemberId(string $device_uuid): string|null
    {
        return self::hGetValue($device_uuid, self::HASH_KEY_MEMBER_ID);
    }

    /**
     * 缓存refresh_token
     *
     * @param string $device_uuid
     * @param string $refresh_token
     *
     * @return bool
     */
    public static function setRefreshToken(string $device_uuid, string $refresh_token): bool
    {
        return self::hSetValue($device_uuid, self::HASH_KEY_REFRESH_TOKEN, $refresh_token);
    }

    /**
     * 获取refresh_token
     *
     * @param string $device_uuid
     * @return string|null
     */
    public static function getRefreshToken(string $device_uuid): string|null
    {
        return self::hGetValue($device_uuid, self::HASH_KEY_REFRESH_TOKEN);
    }

    /**
     * 设置缓存
     *
     * @param string $device_uuid
     * @param string $hash_key
     * @param string $refresh_token
     * @param bool $expired
     * @param int $baseExpirySeconds
     * @param int $maxRandomSeconds
     * @return int|bool
     */
    public static function hSetValue(
        string $device_uuid,
        string $hash_key,
        string $refresh_token,
        bool $expired = true,
        int $baseExpirySeconds = 2592000,
        int $maxRandomSeconds = 60
    ): int|bool
    {
        $key = self::getKeyWithPadding($device_uuid);
        $randomSeconds = mt_rand(0, $maxRandomSeconds);
        $expirySeconds = $baseExpirySeconds + $randomSeconds;
        $sr = Redis::hSet($key, $hash_key, $refresh_token);
        if ($expired) {
            $er = self::expiredHashKey($key, $expirySeconds);
        }
        return $sr && ($er ?? true);
    }

    /**
     * 获取缓存
     *
     * @param string $device_uuid
     * @param string $hash_key
     * @return string|null
     */
    public static function hGetValue(string $device_uuid, string $hash_key): string|null
    {
        $key = self::getKeyWithPadding($device_uuid);

        return Redis::hGet($key, $hash_key);
    }

    /**
     * 设置短信验证码缓存
     *
     * @param string $mobile
     * @param string $value
     * @param string $type
     * @param int $seconds 缓存时间
     * @return int|bool
     */
    public static function setValue(
        string $mobile,
        string $value,
        string $type,
        int $seconds = 600
    ): int|bool
    {
        $key = self::getKeyWithPadding($mobile, 'message:code:for:' . $type);

        return Redis::setex($key, $seconds, $value);
    }

    /**
     * 获取短信验证码缓存
     *
     * @param string $mobile
     * @param string $type
     * @return string|null
     */
    public static function getValue(string $mobile, string $type = ''): string|null
    {
        $key = self::getKeyWithPadding($mobile, 'message:code:for:' . $type);

        return Redis::get($key);
    }

    /**
     * 设置hash过期时间
     * @param string $key
     * @param int $seconds
     * @return bool
     */
    public static function expiredHashKey(string $key, int $seconds): bool
    {
        return Redis::expire($key, $seconds);
    }

    /**
     * 生成key
     *
     * @param String $padding
     * @param String $type
     * @return String
     */
    public static function getKeyWithPadding(string $padding, string $type = 'oauth'): string
    {
        return self::getKey($type, $padding);
    }
}
