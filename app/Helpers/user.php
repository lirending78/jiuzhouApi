<?php

/**
 * 获取表前缀
 *
 * @return string
 */

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

if (!function_exists('get_table_prefix')) {
    function get_table_prefix(): string
    {
        return config('database.connections.' . config('database.default') . '.prefix');
    }
}

/**
 * 生成邀请码
 *
 * @param int $member_id
 * @return string
 */
if (!function_exists('gen_invite_code')) {
    function gen_invite_code(int $member_id): string
    {
        // 生成一个6位随机数字
        $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

        // 确保邀请码是唯一的
        while (!is_unique_code($randomNumber)) {
            $randomNumber = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);
        }

        return $randomNumber;
    }
}
function is_unique_code(string $code): bool
{
    // 这里需要根据您的数据库结构和模型来实现检查逻辑
    // 以下是一个示例，假设您有一个 InviteCode 模型
    return \App\Models\User\Member\MemberModel::query()->where('invite_code', $code)->doesntExist();
}

if (!function_exists('random_name')) {
    function random_name($prefix, $length): string
    {
        $characters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ12356789";
        $name = "";
        for ($i = 0; $i < $length; $i++) {
            $name .= $characters[mt_rand(0, strlen($characters) - 1)];

        }
        return $prefix . $name;
    }
}

/**
 * 生成第三方唯一标识
 *
 * @param int $member_id
 * @return string
 */
if (!function_exists('third_platform_uuid')) {
    function third_platform_uuid(int $member_id): string
    {
        if (getenv('APP_DEBUG') === 'false') {
            $prefix = 'wjqu4c';
        } else {
            $prefix = 'betawjqu';
        }

        return $prefix . $member_id;
    }
}

/**
 * 验证手机号码
 *
 * @param string $mobile
 * @return bool|int
 */
if (!function_exists('is_valid_mobile_number')) {
    function is_valid_mobile_number(string $mobile): bool|int
    {
        $pattern = '/^1[3456789]\d{9}$/';

        return preg_match($pattern, $mobile);
    }

}

/**
 * 验证姓名
 *
 * @param string $name
 * @return bool|int
 */
if (!function_exists('is_valid_realname')) {
    function is_valid_realname(string $name): bool|int
    {
        // 2-14位汉字，5-20位英文(包含英文点号)
        $pattern = '/^([\x{4e00}-\x{9fa5}]{2,14}|[a-zA-Z.\\s]{5,20})$/u';

        return preg_match($pattern, $name);
    }
}

/**
 * 验证身份证号码
 *
 * @param string $identity
 * @return bool|int
 */
if (!function_exists('is_valid_id_card')) {
    function is_valid_id_card(string $identity): bool|int
    {
        $pattern = '/^\d{6}((1[89])|(2\d))\d{2}((0\d)|(1[0-2]))((3[01])|([0-2]\d))\d{3}(\d|X)$/i';

        return preg_match($pattern, $identity);
    }
}

/**
 * 验证银行卡号码
 *
 * @param string $bank_card
 * @return bool
 */
if (!function_exists('is_valid_bank_card')) {
    function is_valid_bank_card(string $bank_card): bool
    {
        if (!preg_match('/^\d{16,19}$/', $bank_card)) {
            return false;
        }

        return true;

        $total = 0;
        for ($i = strlen($bank_card); $i > 0; $i--) {
            $num = (int)$bank_card[$i - 1];

            if ($i & 1) {
                $total += $num;
            } else {
                $total += floor($num * 2 / 10) + $num * 2 % 10;
            }
        }

        return $total % 10 === 0;
    }
}

/**
 * 验证信用卡有效期
 *
 * @param string $thru (03/21)
 * @return bool
 */
if (!function_exists('is_valid_thru')) {
    function is_valid_thru(string $thru): bool
    {
        if (!str_contains($thru, '/')) {
            return false;
        }

        $arr = explode('/', $thru);
        if (count($arr) !== 2) {
            return false;
        }

        list($part1, $part2) = $arr;
        if (!is_numeric($part1) || !is_numeric($part2) || bccomp($part1, 12) === 1 || bccomp($part2, 99) === 1) {
            return false;
        }

        return true;
    }
}

/**
 * 验证是否uuid
 *
 * @param string $uuid (5efb6411-c2ec-4fbb-8e82-b8dca2dcf423)
 * @return bool
 */
if (!function_exists('is_valid_uuid')) {
    function is_valid_uuid(string $uuid): bool
    {
        return Ramsey\Uuid\Uuid::isValid($uuid);
    }
}

/**
 * 生成短信短信码
 *
 * @param int $length
 * @return string
 */
if (!function_exists('gen_message_code')) {
    function gen_message_code(int $length = 6): string
    {
        $code = '';
        $pattern = '1234567890';
        for ($i = 0; $i < $length; $i++) {
            $code .= $pattern[mt_rand(0, 9)];
        }

        return $code;
    }
}

/**
 * 验证短信码
 *
 * @param string $message_code
 * @return bool
 */
if (!function_exists('is_message_code')) {
    function is_message_code(string $message_code): bool
    {
        $message_code = trim($message_code);
        if (!is_numeric($message_code) || strlen($message_code) !== 6) {
            return false;
        }

        return true;
    }
}

/**
 * 组装方法名(下划线转驼峰)
 *
 * @param string $func_name
 * @return string
 */
if (!function_exists('assemble_func_name')) {
    function assemble_func_name(string $func_name): string
    {
        if (str_contains($func_name, '_')) {
            $piece = explode('_', $func_name);
            $new = '';
            array_walk_recursive($piece, function ($val, $key) use (&$new) {
                $new .= $key === 0 ? $val : ucfirst($val);
            });

            $func_name = $new;
        }

        return $func_name;
    }
}

/**
 * 密码加密
 *
 * @param string $password
 * @param string $username
 * @param int $timestamp
 * @return string
 */
if (!function_exists('get_encrypted_password')) {
    function get_encrypted_password(string $password, string $username, string $timestamp): string
    {
        // 兼容以前的密码存储方式，$username采用定值
        $string_md5 = md5(md5($password) . 's3e3e599a068e615a6a5ac3ca6b71f41' . $timestamp); // old

        return 's' . substr($string_md5, 0, 31);
    }
}

/**
 * 生成设备ID
 *
 * @return string
 */
if (!function_exists('gen_device_uuid')) {
    function gen_device_uuid(): string
    {
        return md5(\Illuminate\Support\Facades\Hash::make(''));
    }
}

/**
 * 加密member_id
 * @param int $member_id
 * @param string $secret
 * @return string
 */
if (!function_exists('gen_member_key')) {
    function gen_member_key(int $member_id, string $secret): string
    {
        // 将传入数字转换成十六进制分割成数组
        $hex = str_split(dechex($member_id));

        $key = str_split($secret);

        $key_len = count($key);

        $rand = mt_rand(0, $key_len - 1);

        $str = $key[$rand];

        // 验证码
        $code = $key[($key_len - $rand + strlen($member_id)) % $key_len];

        // 循环十六进制每一位数字，替换成密钥里的值
        foreach ($hex as $val) {
            $offset = hexdec($val) + $rand;
            $str .= $key[$offset % $key_len];
        }

        return $str . $code;
    }
}

/**
 * 生成access_token
 *
 * @param string $device_uuid
 * @param string $secret
 * @return string
 */
if (!function_exists('gen_access_token')) {
    function gen_access_token(string $device_uuid, string $secret): string
    {
        if (!isset($device_uuid)) {
            $device_uuid = gen_device_uuid();
        }

        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];
        $payload = [
            'key' => $device_uuid,
            'exp' => time() + 2592000,
        ];

        $base64_header = base64_encode(json_encode($header));
        $base64_payload = base64_encode(json_encode($payload));

        // generate
        $connection = sprintf('%s.%s', $base64_header, $base64_payload);
        $signature = hash_hmac('sha256', $connection, $secret);

        return sprintf('%s.%s.%s', $base64_header, $base64_payload, $signature);
    }
}

/**
 * 解析access_token
 *
 * @param string $access_token
 * @param string $secret
 * @return array|null
 * @author fable
 * @date 2022/2/24/024 10:211
 */
if (!function_exists('decrypt_access_token')) {
    function decrypt_access_token(string $access_token, string $secret): array|null
    {
        if (!$access_token) {
            return null;
        }

        $elements = explode('.', $access_token);
        if (count($elements) !== 3) {
            return null;
        }

        list($base64_header, $base64_payload, $signature) = $elements;

        // compare
        $connection = sprintf('%s.%s', $base64_header, $base64_payload);
        $tmp = hash_hmac('sha256', $connection, $secret);
        if ($signature !== $tmp) {
            return null;
        }

        $json_payload = base64_decode($base64_payload);
        if ($json_payload === false) {
            return null;
        }

        $payload = json_decode($json_payload, true);
        if (!isset($payload) || $payload === false) {
            return null;
        }

        return $payload;
    }
}

/**
 * 生成refresh_token
 *
 * @param string $device_uuid
 * @param string $member_key
 * @param string $secret
 * @return string
 */
if (!function_exists('gen_refresh_token')) {
    function gen_refresh_token(string $device_uuid, string $member_key, string $secret): string
    {
        $expired = 30 * 24 * 60 * 60;

        if (!isset($device_uuid)) {
            $device_uuid = gen_device_uuid();
        }

        $header = [
            'alg' => 'HS256',
            'typ' => 'JWT'
        ];
        $payload = [
            'device_uuid' => $device_uuid,
            'exp' => time() + $expired,
        ];
        if (isset($member_key)) {
            $payload['key'] = $member_key;
        }

        $base64_header = base64_encode(json_encode($header));
        $base64_payload = base64_encode(json_encode($payload));

        $connection = sprintf('%s.%s', $base64_header, $base64_payload);

        $signature = hash_hmac('sha256', $connection, $secret);

        return sprintf('%s.%s.%s', $base64_header, $base64_payload, $signature);
    }

    /**
     * 生成refresh_token
     *
     * @param string $device_uuid
     * @param string $member_key
     * @param string $secret
     * @return string
     */
    if (!function_exists('get_user_info')) {
        function get_user_info(int $member_id): array
        {
            $name = 'user_' . $member_id;
            $cacheKey = "easemob_token_{$member_id}"; // 缓存键

            try {
                // 尝试从缓存中获取 Token
                if (Cache::has($cacheKey)) {
                    $token = Cache::get($cacheKey);
                } else {
                    // 缓存中没有，调用环信 API 获取 Token
                    $token = \Easemob::getUserToken($name, '123456');
                    // 将 Token 存储到缓存中，假设环信设置的 Token 是不过期的
                    // 可以根据需要设置合适的缓存时间
                    Cache::put($cacheKey, $token, now()->addDays(7));
                }

                $userInfo = ['member_id' => $member_id, 'name' => $name, 'easemob_token' => $token];
            } catch (Exception $e) {
                Log::channel('member')->error('登录获取 easemob_token 失败：' . $e->getMessage());
                $userInfo = ['member_id' => $member_id, 'name' => $name, 'easemob_token' => ''];
            }

            return $userInfo;
        }
    }
}
