<?php

namespace App\Admin\Actions\Financial\Actions;

use App\Admin\Forms\Financial\Witndrawa;
use Dcat\Admin\Actions\Action;
use Dcat\Admin\Actions\Response;
use Dcat\Admin\Widgets\Modal;
use Illuminate\Http\Request;

class WitndrawaAuditRefuse extends Action
{
    /**
     * 按钮标题
     *
     * @var string
     */
    protected $title = '驳回';
    protected $uuid;
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
            ->body(Witndrawa::make()->payload(['uuid'=>$this->uuid]))
            ->button($this->title)->button('<a style="color:red; margin: 0 10px; " >'.$this->title.' </a>');
    }

















}
