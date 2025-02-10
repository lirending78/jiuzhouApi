<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\News;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use App\Models\News as NewsModel;
use App\Admin\Actions\Grid\Restore;

class NewsController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new News(), function (Grid $grid) {
//            $grid->column('id')->sortable();
//            $grid->column('uuid');
            $grid->column('title')->textarea();
            $grid->column('description')->textarea();
            $grid->column('order')->textarea();
            $grid->column('display_time');
            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            //禁用显示
            $grid->disableViewButton();
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                if (request('_scope_') == 'trashed') {
                    $actions->append(new Restore(NewsModel::class));
                    $actions->disableDelete();
                }
            });
            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $filter->scope('trashed', '回收站')->onlyTrashed();
                // 设置日期范围过滤器
                $filter->between('created_at')->datetime();
                $filter->between('updated_at')->datetime();
                $filter->between('display_time');
                $filter->like('title')->width(3);
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
        return Show::make($id, new News(), function (Show $show) {
            $show->field('id');
            $show->field('uuid');
            $show->field('title');
            $show->field('description');
            $show->field('display_time');
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
        return Form::make(new News(), function (Form $form) {
//            $form->display('id');
//            $form->text('uuid');
            $form->text('title');
            $form->textarea('description');
            $form->editor('content');
            $form->number('order')->default(NewsModel::max('order') + 1);
            $form->datetime('display_time')->default(date('Y-m-d H:i:s'));
            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
