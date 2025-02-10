<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Financial\Actions\WitndrawaAuditRefuse;
use App\Admin\Repositories\Withdrawal;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class WithdrawalController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new Withdrawal(), function (Grid $grid) {
            //超出隐藏
            $grid->column('user_id')->limit(5);
            $grid->column('withdrawal_order_num','单号');
            $grid->column('decimal');
            $grid->column('withdrawal_account');
            $grid->column('withdrawal_credentials','凭证')->image('',50,50);
            $grid->column('status')->using(['pending'=>'待处理','failed'=>'拒绝','completed'=>'成功'])->label(['pending' => 'orange','failed' => 'danger','completed'=>'success']);

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
                if ($this->status == 'pending') {
                    $actions->append(new \App\Admin\Actions\Financial\Withdrawal($this->uuid));
                    $actions->append(new WitndrawaAuditRefuse($this->uuid));
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
        return Show::make($id, new Withdrawal(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('user_id');
            $show->field('decimal');
            $show->field('withdrawal_account');
            $show->field('status');
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
        return Form::make(new Withdrawal(), function (Form $form) {
            $form->display('id');
            $form->text('uuid');
            $form->text('user_id');
            $form->text('decimal');
            $form->text('withdrawal_account');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
