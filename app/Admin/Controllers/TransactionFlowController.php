<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TransactionFlow;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TransactionFlowController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TransactionFlow(), function (Grid $grid) {
            $grid->column('user_id')->limit(5);
            $grid->column('transaction_no');
            $grid->column('amount');
            $grid->column('currency');
            //充值：deposit  提现：withdrawal    购买：purchase
            $grid->column('transaction_type')->using(['deposit' => '充值', 'withdrawal' => '提现', 'purchase' => '购买'])->label(['deposit' => 'success', 'withdrawal' => 'danger', 'purchase' => 'primary']);
//           pending 已处理
            $grid->column('status')->using(['pending' => '待处理','completed'=>'成功'])->label(['pending' => 'orange','completed'=>'success']);
//           Manual recharge ：人工充值
            $grid->column('payment_method')->using(['Manual recharge' => '人工审核'])->label(['Manual recharge' => 'success']);
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableCreateButton();
            $grid->disableActions();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('id');
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
        return Show::make($id, new TransactionFlow(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('user_id');
            $show->field('transaction_no');
            $show->field('amount');
            $show->field('currency');
            $show->field('transaction_type');
            $show->field('status');
            $show->field('payment_method');
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
        return Form::make(new TransactionFlow(), function (Form $form) {
            $form->display('id');
            $form->text('uuid');
            $form->text('user_id');
            $form->text('transaction_no');
            $form->text('amount');
            $form->text('currency');
            $form->text('transaction_type');
            $form->text('status');
            $form->text('payment_method');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
