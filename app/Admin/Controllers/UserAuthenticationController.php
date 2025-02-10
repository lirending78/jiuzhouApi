<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\UserAuthenticationRefuse;
use App\Admin\Repositories\UserAuthentication;
use App\Models\User\User;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;

class UserAuthenticationController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new UserAuthentication(), function (Grid $grid) {
//            $grid->column('id')->sortable();
            $grid->column('user_id','用户')->display(function ($user_id) {
                return User::query()->where('user_id', $user_id)->value('user_mail');
            });
            $grid->column('nationality');
            $grid->column('real_name');
            $grid->column('id_number');
            $grid->column('front_image')->image('',50,50);
            $grid->column('back_image')->image('',50,50);
            $grid->column('handheld_image')->image('',50,50);
            $grid->column('status')->using(['pending' => '待审核', 'success' => '已通过','error' => '已拒绝'])->label(['pending' => 'orange','success' => 'success','error' => 'danger']);
            $grid->column('refused_msg');

            $grid->column('created_at');
            $grid->column('updated_at')->sortable();
            $grid->disableCreateButton();
            $grid->fixColumns(-3);
            $grid->actions(function (Grid\Displayers\Actions $actions) {

                $actions->disableView();
                $actions->disableDelete();
                $actions->disableEdit();
                if ($this->status == 'pending') {
                    $actions->append(new \App\Admin\Actions\UserAuthentication($this->uuid));
                    $actions->append(new UserAuthenticationRefuse($this->uuid) );
                }


            });

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
        return Show::make($id, new UserAuthentication(), function (Show $show) {
            $show->field('id');
            $show->field('user_id');
            $show->field('nationality');
            $show->field('real_name');
            $show->field('id_number');
            $show->field('front_image');
            $show->field('back_image');
            $show->field('handheld_image');
            $show->field('refused_msg');
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
        return Form::make(new UserAuthentication(), function (Form $form) {
            $form->display('id');
            $form->text('user_id');
            $form->text('nationality');
            $form->text('real_name');
            $form->text('id_number');
            $form->text('front_image');
            $form->text('back_image');
            $form->text('handheld_image');
            $form->text('refused_msg');
            $form->text('status');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
