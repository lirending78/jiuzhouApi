<?php

namespace App\Admin\Actions\Form;

use Dcat\Admin\Form\AbstractTool;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use App\Http\Services\Common\EmailService;


class CheckEmail extends AbstractTool
{
    /**
     * @return string
     */
	protected $title = '发送测试邮件';

    protected $style = 'btn btn-sm btn-success';

    public function handle(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'send_email' => 'required|email',
            'password' => 'required',
            'smtp' => 'required',
            'port' => 'required',
            'is_ssl' => 'required',
        ],[
           'send_email.required' => '请填写发送邮箱',
            'send_email.email' => '发送邮箱格式不正确',
            'password.required' => '请填写密码',
            'smtp.required' => '请填写SMTP服务器',
            'port.required' => '请填写端口',
        ]);
        if ($validator->fails()) {
            return $this->response()->error($validator->errors()->first());
        }
        //初始化
        $this->config($request);
        $subject = '测试邮件';
        $send_email = $request->get('send_email');
        $result=  $this->sendMail($send_email, $subject, 'emails.ceshi', ['name' => '测试邮件']);
        // 返回响应
        if ($result === true) {
            return $this->response()->success('邮件已发送');
        }
        return $this->response()->error('邮件发送失败：' . $result);
    }
    public function sendMail(string $to, string $subject, string $view, array $data = [])
    {
        try {
            Mail::send($view, $data, function($message) use ($to, $subject) {
                $message->to($to)->subject($subject);
                // 可选：动态设置发件人信息
                $message->from($to, '发件人名称');
            });
            return true;
        } catch (\Exception $e) {
            // 可在此记录日志
            Log::error('邮件发送失败：' . $e->getMessage());
            Log::info('邮件数据：', [
                'to' => $to,
                'subject' => $subject,
                'view' => $view,
                'data' => $data,
            ]);
            // 返回异常信息
            return $e->getMessage();
        }
    }

    //初始化
    public function config($request)
    {
        config()->set('mail.mailers.smtp.host', $request->get('smtp'));
        config()->set('mail.mailers.smtp.port',(int) $request->get('port'));
        config()->set('mail.mailers.smtp.username', $request->get('send_email'));
        config()->set('mail.mailers.smtp.password', $request->get('password'));
        config()->set('mail.mailers.smtp.encryption',  $request->get('is_ssl') ? 'ssl' : 'tls');
        config()->set('mail.from.address',$request->get('send_email'));
        config()->set('mail.from.name','测试邮件');
    }



    protected function html()
    {
        $this->defaultHtmlAttribute('href', 'javascript:void(0)');
        return <<<HTML
<div class="pull-left btn-primary" style="margin-right: 5px;" >
    <a {$this->formatHtmlAttributes()}><i class="feather"></i> {$this->title()}</a>
</div>
HTML;
    }

    /**
	 * @return string|array|void
	 */
	public function confirm()
	{
		 return ['邮箱测试', '这将会发送一封测试邮件，确定要继续吗？'];
	}

    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     * @return bool
     */
    protected function authorize($user): bool
    {
        return true;
    }

    protected function actionScript()
    {
        return <<<JS
function (data, target, action) {
    let formData=$('.content-body .row .col-md-12 form').serializeArray();
    $.each(formData, function(i, field){
        if(field.name!='_method'){
            action.options.data[field.name] = field.value;
        }
    });
}
JS;
    }


}
