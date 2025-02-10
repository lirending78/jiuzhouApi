<?php

namespace App\Lib\Notification;

use Illuminate\Notifications\Notification;

class SomeNotification extends  Notification
{
    public function via()
    {
        return [\Weiwait\DcatEasySms\Channels\EasySmsChannel::class];
    }

    public function toEasySms($notifiable)
    {
        return [
            'template' => 'SMS_000001',
            'data' => [
                'code' => '模板消息变量${code}'
            ]
        ];
    }
}
