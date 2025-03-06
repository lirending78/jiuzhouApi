<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserWithdrawalAddress;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserWithdrawalAddressController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserWithdrawalAddress(), function (Grid $grid) {
            $grid->column('uuid')->sortable();
            $grid->column('user_id');
            $grid->column('wallet_type');
            $grid->column('card_number');
            $grid->column('bank_name');
            $grid->column('holder_name');
            $grid->column('wallet_address');
            $grid->column('status');
            $grid->column('currency');
            $grid->column('name');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
            $grid->filter(function (Grid\Filter $filter) {
                $filter->equal('uuid');
        
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
        return Show::make($id, new UserWithdrawalAddress(), function (Show $show) {
            $show->field('uuid');
            $show->field('user_id');
            $show->field('wallet_type');
            $show->field('card_number');
            $show->field('bank_name');
            $show->field('holder_name');
            $show->field('wallet_address');
            $show->field('status');
            $show->field('currency');
            $show->field('name');
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
        return Form::make(new UserWithdrawalAddress(), function (Form $form) {
            $form->display('uuid');
            $form->text('user_id');
            $form->text('wallet_type');
            $form->text('card_number');
            $form->text('bank_name');
            $form->text('holder_name');
            $form->text('wallet_address');
            $form->text('status');
            $form->text('currency');
            $form->text('name');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
