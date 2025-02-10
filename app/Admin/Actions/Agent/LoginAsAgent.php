<?php

namespace App\Admin\Actions\Agent;

use App\Models\Agent\AgentAdminUsers;
use Dcat\Admin\Grid\RowAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class LoginAsAgent extends RowAction
{
    /**
     * 标题
     *
     * @return string
     */
    public function title()
    {
        return '登录';
    }


    public function html(): string
    {
        $this->defaultHtmlAttribute('href', 'javascript:void(0)');
        return <<<HTML
<a {$this->formatHtmlAttributes()}>
<i title="{$this->title()}" class="feather icon-log-in"></i> &nbsp;</a>
HTML;
    }

    public function handle(Request $request)
    {

        $user_id = $request->get('user_id');
        $agentId = AgentAdminUsers::query()->where('agent_user_id', $user_id)->first();
        if (!$agentId) {
            return $this->response()->error('所选账号不存在!');
        }
        $loginurl = URL::signedRoute('autologin', ['user' => $agentId],now()->addMinutes(1),true);
        return $this->response()->html($loginurl)->success('正在跳转，请稍后');

    }


    /**
     * 设置确认弹窗信息，如果返回空值，则不会弹出弹窗
     *
     * 允许返回字符串或数组类型
     *
     * @return array|string|void
     */
    public function confirm()
    {
        // 确认弹窗 title
        return ['温馨提示', '确认登录到代理后台吗?'];
    }

    protected function handleHtmlResponse()
    {
        return <<<'JS'
function (target, html, data) {
    window.parent.open(html);
}
JS;
    }

    /**
     * 设置要POST到接口的数据
     *
     * @return array
     */
    public function parameters()
    {

        return [
            // 发送当前行 username 字段数据到接口
            'user_id' => $this->row->user_id,
        ];
    }
}
