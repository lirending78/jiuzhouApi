<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\TradingPairCategory;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class TradingPairCategoryController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new TradingPairCategory(), function (Grid $grid) {
            $grid->model()->orderBy('sort');
//            $grid->column('uuid');
            $grid->column('name');
            $grid->column('description');
            $grid->column('status')->switch();
            $grid->column('sort')->orderable();
            $grid->column('created_at')->sortable();
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
        return Show::make($id, new TradingPairCategory(), function (Show $show) {
            $show->field('uuid');
            $show->field('name');
            $show->field('description');
            $show->field('sort');
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
        return Form::make(new TradingPairCategory(), function (Form $form) {
            $form->display('uuid');
            $form->text('name')->required();
            $form->text('description');
            $form->switch('status')->default(1);
            $form->number('sort');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
