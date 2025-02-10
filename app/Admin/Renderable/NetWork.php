<?php
namespace App\Admin\Renderable;

use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;

class NetWork extends LazyRenderable
{
    public function grid(): Grid
    {
        // 获取传入的供应商 user_id（通过模态窗传递）
        $user_id = request()->get('user_id');

        return Grid::make((new \App\Models\User\User)->GetAllUser($user_id), function (Grid $grid) {
            $grid->column('user_id', 'id');
            $grid->column('user_name', '用户名');
            $grid->column('user_mobile', '手机号');
            $grid->column('created_at', '注册时间');
            $grid->quickSearch(['user_name', 'user_mobile','user_id']);
            // 禁用工具栏、创建按钮等
            $grid->disableRowSelector();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->disableActions();
            $grid->disableFilter();
        });
    }
}
