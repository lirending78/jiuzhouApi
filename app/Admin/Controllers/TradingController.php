<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Agent\LoginAsAgent;
use App\Admin\Actions\Agent\OpenAgent;
use App\Admin\Renderable\UserWallet;
use App\Admin\Renderable\NetWork;
use App\Admin\Repositories\User;
use App\Http\Services\User\UserService;
use App\Models\Agent\AgentModel;
use App\Models\User\User as UserModel;
use App\Models\User\UserType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;
use Dcat\Admin\Widgets\Modal;

class TradingController extends AdminController
{

    public array $vip_level = [0=>'普通用户',1=>'VIP',2=>'SVIP',3=>'超级VIP'];
    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new AgentModel(), function (Grid $grid) {

            $user_type = UserType::all()->pluck('type','uuid');
            $user_type[''] = '未分组';
            $grid->column('type')->select($user_type);
            //三个一页
            //设置排序
            $grid->model()->orderBy('created_at', 'desc');
            $grid->async();
            $grid->withBorder();
            $grid->column('agent_name');
            $grid->column('mobile');
            $grid->column('real_name');
            //代理商状态  1-未激活 2-已激活 3-已关闭
            $grid->column('status')->using([1=>'未激活',2=>'已激活',3=>'已关闭'])->label([
                1=>'warning',
                2=>'success',
                3=>'danger',
            ]);

            $grid->column('all_child','所有下级')->display(function (){
                return Modal::make()
                    ->lg() // 设置模态窗大小
                    ->xl()
                    ->title(" {$this->user_name} 的用户列表") // 动态设置模态窗标题
                    ->body(NetWork::make()->payload(['user_id'=>$this->user_id])) // 将供应商 ID 传递给 LazyRenderable
                    ->button("<button class='btn btn-primary btn-sm'>查看</button>");
            });


            $grid->fixColumns(-3);
            $grid->disableDeleteButton();
            $grid->disableViewButton();
            $grid->showQuickEditButton();
            $grid->disableEditButton();

            $grid->disableCreateButton();
//
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                // 当前行的数据数组
             $actions->append(new LoginAsAgent());
            });

            $grid->filter(function (Grid\Filter $filter)use($user_type) {
                $filter->panel();
                $filter->like('user_name')->width(3);
                $filter->like('user_mobile')->width(3);
                $filter->like('user_mail')->width(3);
                $filter->like('uuid')->width(4);;
                $filter->like('type')->select($user_type)->width(3);
                $filter->equal('ip')->width(2);
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
        return Show::make($id, new User(), function (Show $show) {
            $show->field('user_id');
            $show->field('user_name');
            $show->field('real_name');
            $show->field('user_mail');
            $show->field('login_password');
            $show->field('safe_password');
            $show->field('user_mobile');
            $show->field('update_time');
            $show->field('create_time');
            $show->field('user_regip');
            $show->field('user_lasttime');
            $show->field('user_lastip');
            $show->field('google_auth_bind');
            $show->field('google_auth_secret');
            $show->field('user_recom');
            $show->field('role_name');
            $show->field('status');
            $show->field('user_code');
            $show->field('mail_bind');
            $show->field('user_mobile_bind');
            $show->field('real_name_authority');
            $show->field('highlevel_authority');
            $show->field('user_level');
            $show->field('withdraw_limit_amount');
            $show->field('withdraw_limit_now_amount');
            $show->field('withdraw_authority');
            $show->field('remarks');
            $show->field('enabled');
            $show->field('login_authority');
            $show->field('c2c_user_type');
            $show->field('gift_money_flag');
            $show->field('gift_user');
            $show->field('days_setting');
        });
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new User(), function (Form $form) {
            $form->display('user_id');
            $form->text('user_name')->disable();
            $form->text('user_recom')->customFormat(function ($v) {
                return UserModel::query()->where('uuid', $v)->value('user_name');
            })->disable();
            $form->select('user_type')->options(UserType::all()->pluck(['type'],'uuid')->toArray());
            //登录权限
            $form->radio('status')->options([1 => '启用', 0 => '禁用'])->default(1);
            //提现权限
            //real_name_authority 认证
            //业务锁定  锁定后无法进购买和提现
            $form->radio('is_lock')->options([1 => '启用', 0 => '禁用'])->default(1);
            $form->radio('documentary_status')->options([1 => '启用', 0 => '禁用'])->default(1);
            $form->text('user_regip')->disable();
            $form->text('user_lasttime')->disable();
            $form->text('user_lastip')->disable();
            $form->select('user_level')->options([0=>'普通用户',1=>'VIP',2=>'SVIP',3=>'超级VIP']);
//            $form->radio('withdraw_authority')->options([1 => '启用', 0 => '禁用'])->default(1);
            $form->textarea('remarks');
            $form->datetime('updated_at')->disable();
            $form->datetime('created_at')->disable();

        });
    }
}
