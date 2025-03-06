<?php
/**
 * Created by PhpStorm.
 * User: THINK
 * Date: 2018/11/8
 * Time: 11:36
 */

use Carbon\Carbon;
use Ixudra\Curl\Facades\Curl;

if (!function_exists('getEncryptPassword')) {
    /**
     * 获取加密密码
     * @param string $password
     * @param string $salt
     * @return string
     */
    function getEncryptPassword($password, $salt)
    {
        return md5($password . $salt);
    }
}
if (!function_exists('endToday')) {
    /**
     * 获取当天结束时间戳
     */
    function endToday()
    {
        return mktime(0, 0, 0, date('m'), date('d') + 1, date('Y')) - 1;
    }
}
if (!function_exists('startToday')) {
    /**
     * 获取当天开始时间戳
     */
    function startToday()
    {
        return strtotime(date("Y-m-d"), time());
    }
}


function base64_urlSafeEncode($data)
{
    $find = array('+', '/');
    $replace = array('-', '_');
    return str_replace($find, $replace, base64_encode($data));
}

function mill_time()
{
    list($msec, $sec) = explode(' ', microtime());
    $millTime = (float)sprintf('%.0f',
        (floatval($msec) + floatval($sec)) * 1000);
    return $millTime;
}


function order_no($prefix = ''): string
{
    $snowflake = new \Godruoyi\Snowflake\Snowflake(1000, 1);
    $snowflake->setStartTimeStamp(\Carbon\Carbon::parse('2018-01-01')->timestamp);
    return $snowflake->id();
}

function item_no($prefix = 'ch_'): string
{
    $snowflake = new \Godruoyi\Snowflake\Snowflake(1000, 1);
    $snowflake->setStartTimeStamp(\Carbon\Carbon::parse('2018-01-01')->timestamp * 1000);
    return $prefix . $snowflake->id();
}

function delivery_no(): string
{
    $snowflake = new \Godruoyi\Snowflake\Snowflake(1000, 1);
    $snowflake->setStartTimeStamp(\Carbon\Carbon::parse('2018-01-01')->timestamp * 100);
    return $snowflake->id();
}

function refund_no($prefix = ''): string
{
    $snowflake = new \Godruoyi\Snowflake\Snowflake(1000, 1);
    $snowflake->setStartTimeStamp(\Carbon\Carbon::parse('2018-01-01')->timestamp * 100);
    return $prefix . $snowflake->id();
}

function rsa_encrypt(string $data, string $key): string
{
    $rsa = new \phpseclib\Crypt\RSA();
    $rsa->loadKey($key);
    $rsa->setEncryptionMode(\phpseclib\Crypt\RSA::ENCRYPTION_PKCS1);
    $ciphertext = $rsa->encrypt($data);
    return base64_encode($ciphertext);
}

function rsa_decrypt(string $data, string $key): string
{
    $rsa = new \phpseclib\Crypt\RSA();
    $rsa->loadKey($key);
    $rsa->setEncryptionMode(\phpseclib\Crypt\RSA::ENCRYPTION_PKCS1);
    $decrypted = $rsa->decrypt(base64_decode($data));
    return $decrypted;
}


function precision($num, $precision): string
{
    return bcdiv($num, 1, $precision);
}

function getip()
{
    static $realip;
    if (isset($_SERVER)) {
        if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $realip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $realip = $_SERVER['HTTP_CLIENT_IP'];
        } else {
            $realip = $_SERVER['REMOTE_ADDR'] ?? '';
        }
    } else {
        if (getenv('HTTP_X_FORWARDED_FOR')) {
            $realip = getenv('HTT/P_X_FORWARDED_FOR');
        } elseif (getenv('HTTP_CLIENT_IP')) {
            $realip = getenv('HTTP_CLIENT_IP');
        } else {
            $realip = getenv('REMOTE_ADDR');
        }
    }
    return $realip;
}

/**
 * 只保留字符串首尾字符，隐藏中间用*代替
 * @param  [string] $user_name 字符串
 * @param  [int] $head      左侧保留位数
 * @param  [int] $foot      右侧保留位数
 * @return string 格式化后的姓名
 */
function substr_cut($user_name, $head = 1, $foot = 1): string
{
    $len = mb_strlen($user_name, 'utf-8');
    $firstStr = mb_substr($user_name, 0, $head, 'utf-8');
    $lastStr = mb_substr($user_name, -$foot, $foot, 'utf-8');
    if ($len <= 2) {
        return $firstStr . '*';
    }
    return $firstStr . str_repeat("*", 2) . $lastStr;
}

/**
 * 将当前月变为开始及结束时间
 * @param  [string] $user_name 字符串
 * @return string 格式化后的姓名
 */
function processing_month($year_month): string
{
    return Carbon::now()->addMonth($year_month)->endOfMonth()->format("Y-m-d");
}

/*生成字符串标识*/
function getIdentify(): string
{
    return md5(order_no() . microtime());
}

/**
 * 隐藏手机号
 * @param string $mobile
 * @return string|string[]
 */
function mobile_cut(string $mobile = ''): array|string
{
    return substr_replace($mobile, '****', 3, 4);
}

/**
 * 隐藏手机号
 * @param string $mobile
 * @return string|string[]
 */
function order_cut(string $mobile = ''): array|string
{
    return substr_replace($mobile, '****', 4, 11);
}

/**
 * 隐藏手机号
 * @param string $mobile
 * @return string|string[]
 */
function card_cut(string $card = ''): array|string
{
    return substr_replace($card, '****', 4, 8);
}

function generateUniqueNickname($phone): string
{
    return "用户" . substr($phone, -4);
}

/**
 * 获取字符串后几位
 * @param string $card
 * @param int $length
 * @return string|string[]
 */
function card_sub(string $card = '', int $length=-4): array|string
{
    return substr($card, $length);
}

if (!function_exists('curlPost')) {
    /**
     * post curl
     * @param $url
     * @param $params
     * @param string[] $headers
     * @return bool|string|array
     * array(3) {
     * ["content"]=> "{"data":"aaaa"}"
     * ["status"]=> int(200)
     * ["contentType"]=> "text/plain;charset=ISO-8859-1"
     * }
     */
    function curlPost(
        $url,
        $params,
        array $headers = array('Content-Type: application/json;charset=utf-8')
    ): bool|string|array {
        return Curl::to($url)
            ->withData($params)
            ->withTimeout(30)
            ->withHeaders($headers)
            ->returnResponseArray()
            ->post();
    }
}

if (!function_exists('curlGet')) {
    /**
     * post curl
     * @param $url
     * @param $params
     * @param string[] $headers
     * @return bool|string|array
     * array(3) {
     * ["content"]=> "{"data":"aaaa"}"
     * ["status"]=> int(200)
     * ["contentType"]=> "text/plain;charset=ISO-8859-1"
     * }
     */
    function curlGet(
        $url,
        $params,
        array $headers = array('Content-Type: application/json;charset=utf-8')
    ): bool|string|array {
        return Curl::to($url)
            ->withData($params)
            ->withTimeout(10)
            ->withHeaders($headers)
            ->returnResponseArray()
            ->get();
    }
}

/**
 *
 * @param string $prefix
 * @return string
 */
function mi_time(string $prefix = 'xk'): string
{
    return $prefix . strval(microtime(true) * 100);
}

/**
 * 发送融宝钉钉群消息
 * @param $message
 * @return mixed
 */
function dingDingSendReapalMsg($message): mixed
{
    $timestamp = time() * 1000;
    $secret = 'SECcf52e034234e67d782983a7da3836c99e0b307df30fc5c1a3e869671a5c74ff6';
    $sign = urlencode(base64_encode(hash_hmac('sha256',
        $timestamp . "\n" . $secret, $secret, true)));
    $webhook = sprintf("https://oapi.dingtalk.com/robot/send?access_token=c3516d6db9a46405d6fdb180aa8c1d377be2d281be6191d779ef6eec829af77c&timestamp=%s&sign=%s",
        $timestamp, $sign);
    $data = array(
        'msgtype' => 'text',
        'text' => array('content' => $message)
    );
    $data_string = json_encode($data);
    $result = curlPost($webhook, $data_string);
    return json_decode($result['content'], true);
}

/**
 * @throws Exception
 */
function generateRoomId($roomId): string
{
    return $roomId . random_int(10000, 999999);
}
// 将此函数放在合适的位置，例如在 App\Helpers\GlobalHelper.php 文件中
if (!function_exists('generateUniqueRandomNumber')) {
    /**
     * 生成一个随机的四位数纯数字字符串，并确保它不与现有记录重复。
     *
     * @param int $id 主键ID，用于确保生成的随机数的唯一性
     * @param int $length
     * @return string 生成的随机数
     * @throws Exception
     */
    function generateUniqueRandomNumber(int $id, int $length = 4): string
    {
        // 确保随机数长度在合理的范围内
        $minRange = pow(10, $length - 1);
        $maxRange = pow(10, $length) - 1;
        // 生成随机数
        $randomNumber = random_int($minRange, $maxRange);


        return str_pad($randomNumber, $length, '0', STR_PAD_LEFT);
    }
}
/**
 * 发送中软数智钉钉群消息
 * @param $message
 * @return mixed
 */
function sendDingDingMsg($message): mixed
{
    $timestamp = time() * 1000;
    $secret = 'SEC37e0f384e2e077959bd8b4fe212ce1d4fc92c6be60205419b02bf8be5d474d93';
    $sign = urlencode(base64_encode(hash_hmac('sha256',
        $timestamp . "\n" . $secret, $secret, true)));
    $webhook = sprintf("https://oapi.dingtalk.com/robot/send?access_token=3937b032ac92d5a81f33a794c55431399ddd98c8feaf87f4121b79e757d56794&timestamp=%s&sign=%s",
        $timestamp, $sign);
    $data = array(
        'msgtype' => 'text',
        'text' => array('content' => $message)
    );
    $data_string = json_encode($data);
    $result = curlPost($webhook, $data_string);
    return json_decode($result['content'], true);
}

/**
 * 发送日志消息钉钉群消息
 * @param $message
 * @return mixed
 */
function sendLogDingDingMsg($message): mixed
{
    $timestamp = time() * 1000;
    $secret = 'SECeebd71515fe9a6cae6cc91f8ea0295a855a8510915a3decbb4d031361fe34dfa';
    $sign = urlencode(base64_encode(hash_hmac('sha256',
        $timestamp . "\n" . $secret, $secret, true)));
    $webhook = sprintf("https://oapi.dingtalk.com/robot/send?access_token=1be8a03dba3c811a95419337d029d1052cd706b53f2305aa147bb0011470052f&timestamp=%s&sign=%s",
        $timestamp, $sign);
    $data = array(
        'msgtype' => 'text',
        'text' => array('content' => $message)
    );
    $data_string = json_encode($data);
    $result = curlPost($webhook, $data_string);
    return json_decode($result['content'], true);
}

function sendKfDingDingMsg($message): mixed
{
    $timestamp = time() * 1000;
    $secret = 'SECe703c99ffac52c0628209b553646d97f90f915e40f9f6e361fda81444ed06985';
    $sign = urlencode(base64_encode(hash_hmac('sha256',
        $timestamp . "\n" . $secret, $secret, true)));
    $webhook = sprintf("https://oapi.dingtalk.com/robot/send?access_token=8a1de700f19958a56ad6c11f4f92bd481262564499b53ef672b1382d051773d0&timestamp=%s&sign=%s",
        $timestamp, $sign);
    $data = array(
        'msgtype' => 'text',
        'text' => array('content' => $message)
    );
    $data_string = json_encode($data);
    $result = curlPost($webhook, $data_string);
    return json_decode($result['content'], true);
}

//推送物流
function sendwlDingDingMsg($message): mixed
{
    $timestamp = time() * 1000;
    $secret = 'SEC3c283a33262fc4d9d7fd5a637d876894098073fc5b771dbcecf59b5f5d64eab0';
    $sign = urlencode(base64_encode(hash_hmac('sha256',
        $timestamp . "\n" . $secret, $secret, true)));
    $webhook = sprintf("https://oapi.dingtalk.com/robot/send?access_token=e783238a630aba7afebf7221d067752b7254c4c3be21a9880f0959d6e1649aed&timestamp=%s&sign=%s",
        $timestamp, $sign);
    $data = array(
        'msgtype' => 'text',
        'text' => array('content' => $message),
        'at' => [
            'atMobiles' => ['15623296305'], // @人手机号
            'isAtAll' => false, // 是否@所有人
        ]
    );
    $data_string = json_encode($data);
    $result = curlPost($webhook, $data_string);
    return json_decode($result['content'], true);
}

// 如果大于0  去除尾部多余的0  如果等于0 直接返回0.0 如果是整数 保留两位小数
function remove_zero_tail($num): string
{
    // 将输入转换为字符串
    $num = (string)$num;

    // 处理 0 的情况
    if ($num == '0') {
        return '0.0';
    }

    // 检查是否包含小数点
    if (strpos($num, '.') !== false) {
        // 分离整数部分和小数部分
        list($integerPart, $decimalPart) = explode('.', $num);

        // 去除小数部分末尾的零
        $decimalPart = rtrim($decimalPart, '0');

        // 如果小数部分为空，则只返回整数部分
        if (empty($decimalPart)) {
            return $integerPart . '.0';
        }

        // 返回处理后的结果
        return $integerPart . '.' . $decimalPart;
    }

    // 如果没有小数点，直接返回
    return $num;
}

