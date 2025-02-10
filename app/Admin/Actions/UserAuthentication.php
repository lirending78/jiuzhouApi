<?php

namespace App\Admin\Actions;

use App\Http\Services\Financial\FinancialService;
use Dcat\Admin\Actions\Action;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Grid\RowAction;
use Dcat\Admin\Widgets\Modal;
use Illuminate\Http\Request;
use App\Admin\Forms\Auth\UserAuthenticationForm as UserForms;

class UserAuthentication extends Action
{
    protected $title = '审核通过';


    public function __construct($uuid = null)
    {
        $this->uuid = $uuid;

    }


    public function render()
    {
        // 实例化表单类并传递自定义参数
        return Modal::make()
            ->lg()
            ->title($this->title)
            ->body(UserForms::make()->payload(['uuid'=>$this->uuid]))
            ->button($this->title)->button('<a style="color:#00ff33; margin: 0 10px; " >' .$this->title.' </a>');
    }

}
