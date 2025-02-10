<?php

namespace App\Admin\Actions\Agent;

use App\Admin\Actions\Form\OpenAgentForms;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Traits\HasPermissions;
use Dcat\Admin\Widgets\Modal;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class OpenAgent extends RowAction
{
    public function title(): string
    {
        return '开通代理';
    }

    public function render(): string|Modal
    {
        // 实例化表单类并传递自定义参数
        $form = OpenAgentForms::make()->payload(['id' => $this->row('user_id')]);
        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body($form)
            ->button($this->html());
    }

    public function html(): string
    {
        $this->defaultHtmlAttribute('href', 'javascript:void(0)');
        return <<<HTML
<a {$this->formatHtmlAttributes()}>
<i title="{$this->title()}" class="fa  fa-plus-square"></i> &nbsp;</a>
HTML;
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

}
