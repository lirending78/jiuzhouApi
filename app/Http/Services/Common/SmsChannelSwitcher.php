<?php

namespace App\Http\Services\Common;

use App\Cache\User\OauthCache;
use App\Http\Services\BaseService;
use Exception;
use Weiwait\DcatEasySms\Models\SmsGateway;
use Weiwait\DcatEasySms\Models\SmsConfig;

class SmsChannelSwitcher extends BaseService
{
    protected $mobile;
    protected $messageType;
    protected $cachedData;
    protected $defaultChannel; // 默认通道

    public function __construct(string $mobile, string $messageType)
    {
        $this->mobile = $mobile;
        $this->messageType = $messageType;
        $this->defaultChannel = SmsConfig::get('gateway'); // 默认通道
    }

    /**
     * 获取并处理验证码和通道
     *
     * @return string|array 返回选择的通道及验证码数据
     * @throws Exception
     */
    public function getChannelAndCode(): array
    {
        // 获取缓存中的验证码数据

        $this->cachedData = $this->getCachedMessageCode();

        // 判断验证码是否过期
        if ($this->cachedData) {
            // 验证码未过期，切换通道
            $channel = $this->getAvailableChannel($this->cachedData['used_channels']);
            return [$channel, $this->cachedData['code']]; // 返回通道和验证码
        }

        // 验证码已过期，使用默认通道并重新生成验证码
        return [$this->defaultChannel, $this->generateNewCode()];  // 返回默认通道和新生成的验证码
    }

    /**
     * 从缓存中获取验证码
     *
     * @return array|mixed
     */
    protected function getCachedMessageCode()
    {
        $cachedData = unserialize(OauthCache::getMessageCode($this->mobile, $this->messageType));
        if (!$cachedData) {
            return  false;
        }
        return $cachedData;
    }

    /**
     * 生成新的验证码
     *
     * @return string
     */
    protected function generateNewCode(): string
    {
        $newCode = gen_message_code();  // 假设你有一个生成验证码的方法
        $value = [
            'code' => $newCode,
            'channel' => $this->defaultChannel,
            'used_channels' => []  // 初始化已经使用过的通道为空数组
        ];
        // 将新验证码和通道信息缓存
        OauthCache::setMessageCode($this->mobile, serialize($value), $this->messageType);
        return $newCode;
    }

    /**
     * 获取可用的短信通道
     *
     * @param string $usedChannels 当前使用的通道
     * @return string
     * @throws Exception
     */
    protected function getAvailableChannel(array $usedChannels): string
    {
        $availableChannels = array_keys(SmsGateway::gateways());
        // 排除已经使用过的通道
        $availableChannels = array_diff($availableChannels, $usedChannels);
        if (empty($availableChannels)) {
            throw new Exception('No available channels left for sending SMS');
        }

        return $availableChannels[array_rand($availableChannels)];
    }


    /**
     * 更新缓存中的使用通道
     *
     * @param string $channel 已使用的通道
     * @return void
     */
    public function updateUsedChannels(string $channel): void
    {
        // 获取当前的缓存数据
        $cachedData = unserialize(OauthCache::getMessageCode($this->mobile, $this->messageType));

        // 将当前通道添加到已使用通道列表中
        $usedChannels = $cachedData['used_channels'] ?? [];
        $usedChannels[] = $channel;
        // 去重：确保已使用通道不重复
        $usedChannels = array_unique($usedChannels);

        // 更新缓存
        $cachedData['used_channels'] = $usedChannels;
        OauthCache::setMessageCode($this->mobile, serialize($cachedData), $this->messageType);
    }
}
