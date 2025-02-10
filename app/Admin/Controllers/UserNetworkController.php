<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\UserNetwork;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class UserNetworkController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserNetwork(), function (Grid $grid) {
            $grid->column('id')->sortable();
            $grid->column('uuid');
            $grid->column('ancestor_id');
            $grid->column('descendant_id');
            $grid->column('level');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
        
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
        return Show::make($id, new UserNetwork(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('ancestor_id');
            $show->field('descendant_id');
            $show->field('level');
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
        return Form::make(new UserNetwork(), function (Form $form) {
            $form->display('id');
            $form->text('uuid');
            $form->text('ancestor_id');
            $form->text('descendant_id');
            $form->text('level');
        
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
