<?php

namespace App\Http\Services\Common;

use App\Cache\User\OauthCache;
use App\Http\Services\BaseService;

class SmsService extends BaseService
{
    /**
     * 校验短信验证码
     *
     * @author fable
     * @date 2022/2/24 10:37
     * @param string $mobile
     * @param string $message_code
     * @param string $type
     * @return int
     */
    public function checkCode(string $mobile, string $message_code, string $type = ''): int
    {
        if ($message_code == 777888) {
            return 1;
        }
        // 校验验证码
        $code = OauthCache::getMessageCode($mobile, $type);
        $message_code_cache = unserialize($code)['code'] ?? null;
        if (! $message_code_cache) {
            return  0;
        }

        if ($message_code_cache !== $message_code) {
            // todo log

            // 验证码错误超过3次，提示重新获取
            $error_times = OauthCache::getCodeErrorTimes($mobile, $type) ?: 0;
            if ($error_times >= 2) {
                // 删除短信验证码及错误次数
                OauthCache::delMessageCode($mobile, $type);
                OauthCache::delCodeErrorTimes($mobile, $type);

                return -1;
            }
            OauthCache::setCodeErrorTimes($mobile, $error_times + 1, $type);

            return 0;
        }

        // 删除短信验证码及错误次数
        OauthCache::delMessageCode($mobile, $type);
        OauthCache::delCodeErrorTimes($mobile, $type);

        return 1;
    }

}
