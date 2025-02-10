<?php

namespace App\Admin\Controllers;

use App\Admin\Repositories\User;
use App\Admin\Repositories\UserWallet;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Show;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Widgets\Modal;

class UserWalletController extends AdminController
{
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {
            $grid->column('user_name');
            $grid->column('real_name');
            $grid->column('user_wallet','钱包')->display(function (){
                return Modal::make()
                    ->lg() // 设置模态窗大小
                    ->xl()
                    ->title(" {$this->user_name} 的钱包") // 动态设置模态窗标题
                    ->body(\App\Admin\Renderable\UserWallet::make()->payload(['user_id'=>$this->user_id])) // 将供应商 ID 传递给 LazyRenderable
                    ->button("<button class='btn btn-primary btn-sm'>查看</button>");
            });
            $grid->disableActions();


            $grid->filter(function (Grid\Filter $filter) {
                $filter->panel();
                $user = \App\Models\User\User::query()->pluck('user_name','user_id');
                $filter->like('user_id')->select($user)->width(3);

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
        return Show::make($id, new UserWallet(), function (Show $show) {
            $show->field('uuid');
            $show->field('user_id');
            $show->field('money');
            $show->field('lock_money');
            $show->field('freeze_money');
            $show->field('del_flag');
            $show->field('version');
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
        return Form::make(new UserWallet(), function (Form $form) {
            $form->display('uuid');
            $form->text('user_id');
            $form->text('money');
            $form->text('lock_money');
            $form->text('freeze_money');
            $form->text('del_flag');
            $form->text('version');

            $form->display('created_at');
            $form->display('updated_at');
        });
    }
}
