<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserTypeController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserType(), function (Grid $grid) {
//            $grid->column('uuid');
            $grid->column('type');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();

            $grid->quickCreate(function (Grid\Tools\QuickCreate $create) {
                $create->text('type', '类型');

            });

            $grid->disableCreateButton();

//            $grid->filter(function (Grid\Filter $filter) {
//                $filter->equal('id');
//
//            });
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
        return Show::make($id, new UserType(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('type');
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
        return Form::make(new UserType(), function (Form $form) {
            $form->display('id');
//            $form->text('uuid');
            $form->text('type');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
