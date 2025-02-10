<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\RechargeAuditRefuse;
use App\Admin\Actions\UserAuthenticationRefuse;
use App\Admin\Forms\Recharge;
use App\Admin\Repositories\RechargeRecord;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class RechargeRecordController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new RechargeRecord(), function (Grid $grid) {
            $grid->column('user_id')->limit(5);
            $grid->column('recharge_type')->display(function ($value) {
                return strtoupper($value);
            });
            $grid->column('recharge_credentials')->image('',50,50);
            $grid->column('num');
            $grid->column('status')->display(function (){
                if ($this->status == null) {
                    return '<span class="label" style="background:orange">待审核</span>';
                }elseif($this->status == 1){
                    return '<span class="label" style="background:#21b978">通过</span>';
                }elseif($this->status == 0){
                    return '<span class="label" style="background:red">拒绝</span>';
                }
            })->help('拒绝时需等待再次申请');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableCreateButton();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
            });
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                $actions->disableView();
                $actions->disableDelete();
                $actions->disableEdit();
                if ($this->status == null) {
                    $actions->append(new \App\Admin\Actions\RechargeAudit($this->user_id));
                }
                if ($this->status == 0) {
                    $actions->append(new RechargeAuditRefuse($this->uuid));
                }
            });
        });
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     *
     * @return Show
     */
    protected function detail($id)
    {
        return Show::make($id, new RechargeRecord(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('user_id');
            $show->field('recharge_type');
            $show->field('recharge_credentials');
            $show->field('status');
            $show->field('num');
            $show->field('created_at');
            $show->field('updated_at');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new RechargeRecord(), function (Form $form) {
            $form->display('id');
            $form->text('uuid');
            $form->text('user_id');
            $form->text('recharge_type');
            $form->text('recharge_credentials');
            $form->text('status');
            $form->text('num');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
