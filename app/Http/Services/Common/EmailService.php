<?php

namespace App\Http\Services\Common;

use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Weiwait\DcatSmtp\Forms\SmtpConfig;
class EmailService
{
    protected $config;

    public function __construct()

    {
        // 从数据库中获取邮件配置信息
        $this->config = (new SmtpConfig())->default();
        $this->setMailConfig();
    }


    /**
     * 设置邮件发送的配置信息
     */
    protected function setMailConfig()
    {
        config()->set('mail.mailers.smtp.host', (new Setting())->getValue('smtp'));
        config()->set('mail.mailers.smtp.port',(new Setting())->getValue('port'));
        config()->set('mail.mailers.smtp.username', (new Setting())->getValue('send_email'));
        config()->set('mail.mailers.smtp.password',  (new Setting())->getValue('password'));
        config()->set('mail.mailers.smtp.encryption', (new Setting())->getValue('is_ssl')?'ssl':'tls');
        config()->set('mail.from.address', (new Setting())->getValue('send_email'));
//        config()->set('mail.from.name', $this->config['mail_from_name']);
    }

    /**
     * 发送邮件
     *
     * @param string $to      接收者邮箱
     * @param string $subject 邮件主题
     * @param string $view    邮件视图模板
     * @param array  $data    模板数据
     * @return bool
     */
    public function sendMail(string $to, string $subject, string $view, array $data = [])
    {

        try {
            Mail::send($view, $data, function($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
            });

            return true;
        } catch (\Exception $e) {
            // 可在此记录日志
            Log::error('邮件发送失败：'. $e->getMessage());
            return false;
        }
    }
}
