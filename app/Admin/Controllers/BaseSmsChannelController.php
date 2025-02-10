<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\BaseSmsChannel;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;

class BaseSmsChannelController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new BaseSmsChannel(), function (Grid $grid) {
            $grid->model()->orderBy('sort');
            $grid->column('uuid');
            $grid->column('name');
            $grid->column('channel_sign');
            $grid->column('api_key');
            $grid->column('api_secret');
            $grid->column('api_url');
            $grid->column('is_active')->switch();
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
        return Show::make($id, new BaseSmsChannel(), function (Show $show) {
            $show->field('uuid');
            $show->field('name');
            $show->field('channel_sign');
            $show->field('api_key');
            $show->field('api_secret');
            $show->field('api_url');
            $show->field('sort');
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
        return Form::make(new BaseSmsChannel(), function (Form $form) {
            $form->display('uuid');
            $form->text('name');
            $form->text('channel_sign');
            $form->text('api_key');
            $form->text('api_secret');
            $form->url('api_url');
            $form->number('sort')->min(0);
            $form->switch('is_active');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
