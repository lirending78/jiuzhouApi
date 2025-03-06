<?php
namespace App\Admin\Renderable;

use App\Admin\Actions\Grid\WithdrawalAddressCheck;
use App\Admin\Repositories\UserWithdrawalAddress as Wallet;
//use App\Models\UserLevel;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;
//use App\Admin\Actions\Grid\WithdrawalStatusAction;
use Dcat\Admin\Admin;
class UserWithdrawalAddress extends LazyRenderable
{

    public function grid(): Grid
    {
        // 获取传入的供应商 user_id（通过模态窗传递）
        $user_id = request()->get('user_id');

        return Grid::make(new Wallet(), function (Grid $grid) use ($user_id) {
            Admin::js('/js/custom-status.js');
            $grid->model()->where('user_id', $user_id);
//            $grid->column('uuid')->sortable();
            $grid->column('user_id', '用户名')->display(function ($user_id) {
                $user = \App\Models\User\User::query()->where('user_id',$user_id)->first();
                return $user->real_name ?? $user->user_mail ;
            });
            $grid->column('wallet_type', '钱包类型')->using(['bankcard' => '银行卡', 'cryptocurrency' => '数字货币'])->label(['bankcard' => 'primary', 'cryptocurrency' => 'primary']);
            $grid->column('card_number', '卡号');
            $grid->column('currency', '币种');

            $grid->column('bank_name', '银行名称');
            $grid->column('holder_name', '持卡人姓名');
            $grid->column('wallet_address', '钱包地址');
            //设置自定义
            $grid->column('status')->using(['inactive' => '待审核', 'active' => '可用', 'frozen' => '已拒绝'])->label(['inactive' => 'warning', 'active' => 'success', 'frozen' => 'danger']);
//            $grid->disableActions();
            //禁用编辑
            $grid->disableEditButton();
            $grid->disableDeleteButton();
            //禁用批量操作
            $grid->actions(function ($actions) {
                // 添加自定义操作按钮
                if($this->status == 'inactive'){
                    $actions->append(new WithdrawalAddressCheck());
                }
            });
            $grid->disableBatchActions();
            $grid->filter(function (Grid\Filter $filter) {
                $filter->like('wallet_type', '钱包类型')->select(['bankcard' => '银行卡', 'cryptocurrency' => '数字货币'])->width(3);
            });
        });
    }


}
