<?php
namespace App\Admin\Renderable;

use Admin;
use App\Admin\Repositories\User;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;
use Dcat\Admin\Widgets\Modal;
use App\Models\User\UserWallet as Model;
class UserWallet extends LazyRenderable
{
    public function grid(): Grid
    {
        Admin::script(
            <<<SCRIPT
$('.preview-tags-require').click(function () {
 var package_name = $(this).attr('data-package_name'); var version_num = $(this).attr('data-version_num'); var tags_require = $(this).attr('data-tags_require'); layer.open({ type: 2,shade: [0.8, '#393D49'], title: '查看明细', area: ['65%', '80%'], content: '/admin/UserWalletDetail?package_name='+package_name+'&current='+version_num, });});
SCRIPT
        );
        // 获取传入的供应商 user_id（通过模态窗传递）
        $user_id = request()->get('user_id');
        return Grid::make(Model::query()->where('user_id', $user_id), function (Grid $grid)use($user_id) {
            $grid->model()->where('user_id', $user_id);
            $grid->column('user_id', 'id')->limit(5);
            $grid->column('currency', '类型');
            $grid->column('money', '可用余额');
            $grid->column('lock_money', '锁定余额');
            $grid->column('freeze', '冻结余额');
            $grid->column('detail','明细')->display(function (){
                return '<div class="preview-tags-require" data-package_name="'.$this->user_id.'" data-version_num="'.$this->currency.'">查看明细</div>';
            });
            $grid->column('created_at', '创建时间');
            $grid->quickSearch(['currency']);
            // 禁用工具栏、创建按钮等
            $grid->disableRowSelector();
            $grid->disableCreateButton();
            $grid->disableBatchActions();
            $grid->disableActions();
            $grid->disableFilter();



        });


    }


}
