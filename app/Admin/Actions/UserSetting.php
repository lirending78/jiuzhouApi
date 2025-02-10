<?php

namespace App\Admin\Actions;

use App\Admin\Forms\UserSetting as UserSettingForm;
use App\Admin\Repositories\User;
use Dcat\Admin\Widgets\Modal;
use Dcat\Admin\Grid\RowAction;

class UserSetting extends RowAction
{
    protected $title = '注册设置';

    public function render()
    {
        // 实例化表单类并传递自定义参数
        $form = UserSettingForm::make();

        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body($form)
            ->button($this->title)->button('<a style="margin: 0 5px; " >'.$this->title.' </a>');
    }
}
