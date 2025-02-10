<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserDepositAddress;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserDepositAddressController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserDepositAddress(), function (Grid $grid) {
            $grid->column('uuid')->sortable();
            $grid->column('user_id');
            $grid->column('currency');
            $grid->column('address');
            $grid->column('is_active');
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
        return Show::make($id, new UserDepositAddress(), function (Show $show) {
            $show->field('uuid');
            $show->field('user_id');
            $show->field('currency');
            $show->field('address');
            $show->field('is_active');
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
        return Form::make(new UserDepositAddress(), function (Form $form) {
            $form->display('uuid');
            $form->text('user_id');
            $form->text('currency');
            $form->text('address');
            $form->text('is_active');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
