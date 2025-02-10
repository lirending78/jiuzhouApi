<?php

namespace App\Admin\Actions;

use App\Admin\Forms\UserAuthentication as UserForms;
use Dcat\Admin\Admin;
use Dcat\Admin\Widgets\Modal;
use Dcat\Admin\Widgets\Table;
use Dcat\Admin\Actions\Action;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class UserAuthenticationRefuse extends Action
{
    /**
     * 按钮标题
     *
     * @var string
     */
    protected $title = '驳回';
    protected $user_id;
    /**
     * 处理当前动作的请求接口，如果不需要请直接删除
     *
     * @param Request $request
     *
     * @return Response
     */
    public function __construct($uuid)
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
            ->button($this->title)->button('<a style="color:red; margin: 0 10px; " >'.$this->title.' </a>');
    }

















}
