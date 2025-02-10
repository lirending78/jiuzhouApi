<?php

namespace App\Admin\Controllers;

use App\Admin\Actions\Agent\LoginAsAgent;
use App\Admin\Actions\Agent\OpenAgent;
use App\Admin\Renderable\NetWork;
use App\Admin\Renderable\UserWallet;
use App\Admin\Repositories\User;
use App\Http\Services\User\UserService;
use App\Models\User\User as UserModel;
use App\Models\User\UserType;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Show;
use Dcat\Admin\Widgets\Modal;


class UserController extends AdminController
{

    public array $vip_level = [0 => '普通用户', 1 => 'VIP', 2 => 'SVIP', 3 => '超级VIP'];

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        return Grid::make(new User(), function (Grid $grid) {

            $user_type = UserType::all()->pluck('type', 'uuid');
            $user_type[''] = '未分组';
            $grid->column('user_type')->select($user_type);
            //三个一页
            //设置排序
            $grid->model()->orderBy('created_at', 'desc');
            $grid->async();
            $grid->withBorder();
//            $grid->column('uuid')->sortable();
            $grid->column('user_name');
            $grid->column('real_name');
            $grid->column('status')->switch();
            $grid->column('user_recom')->display(function () {
                return UserModel::query()->where('user_id', $this->user_recom)->value('user_name');
            })->help('点击查看推荐网络')->modal(function ($modal) {
                //设置弹窗icon
                $modal->title('推荐网络');
                //找顶级推荐人
                $net_work = (new UserService())->getUserUpNetwork($this->user_id);
                return view('admin.rec_list', compact('net_work'));
            });

            $grid->column('all_child', '所有下级')->display(function () {
                return Modal::make()
                    ->lg() // 设置模态窗大小
                    ->xl()
                    ->title(" {$this->user_name} 的用户列表") // 动态设置模态窗标题
                    ->body(NetWork::make()->payload(['user_id' => $this->user_id])) // 将供应商 ID 传递给 LazyRenderable
                    ->button("<button class='btn btn-primary btn-sm'>查看</button>");
            });

            $grid->column('user_wallet', '钱包')->display(function () {
                return Modal::make()
                    ->lg() // 设置模态窗大小
                    ->xl()
                    ->title(" {$this->user_name} 的钱包") // 动态设置模态窗标题
                    ->body(UserWallet::make()->payload(['user_id' => $this->user_id])) // 将供应商 ID 传递给 LazyRenderable
                    ->button("<button class='btn btn-primary btn-sm'>查看</button>");
            });

//    $grid->column('user_mail');
//    $grid->column('user_mobile');
//    $grid->column('real_name_authority')->using([1=>'通过',0=>'未认证'])->label([1=>'green',2=>'orange']);
//
//    $vip = $this->vip_level;
//    $grid->column('user_level')->display(function ()use($vip) {
//        return $vip[$this->user_level];
//    });
//    $grid->column('documentary_status')->switch();
            $grid->column('', 'c2c订单')->display(function () {
                $user_id = $this->user_id;
                $url = admin_url('c2cOrder') . '?user_id=' . $user_id;
                $str = '<a href="' . $url . '" target="_blank"> c2c订单 </a>';
                return $str;
            });
//    $grid->column('remarks')->textarea();
//    $grid->column('update_time');
//    $grid->column('created_at')->display(function () {
//        return date('Y-m-d H:i:s',strtotime($this->created_at));
//    });
//    $grid->column('user_regip');
//    $grid->column('user_lasttime');
//    $grid->column('user_lastip');
            $grid->fixColumns(-3);
            $grid->disableDeleteButton();
            $grid->disableViewButton();
            $grid->showQuickEditButton();
            $grid->disableEditButton();


            $grid->disableCreateButton();
            $grid->actions(function (Grid\Displayers\Actions $actions) {
                // 当前行的数据数组
                $actions->append(new OpenAgent());
                $actions->append(new LoginAsAgent());
            });



//    $grid->actions(function (Grid\Displayers\Actions $actions) {
//        $actions->append(new UserAuthentication($this->user_id));
//    });
            //工具栏新新增 设置按钮 设置用户弹窗
//    $grid->tools(function (Grid\Tools $tools) {
//        $tools->append('<button class="btn btn-primary  filter-btn-XcIPugNG btn-outline feather  icon-settings">'.new UserSetting().'</button>');
//    });
            $grid->filter(function (Grid\Filter $filter) use ($user_type) {
                $filter->panel();
                $filter->like('user_name')->width(3);
                $filter->like('user_mobile')->width(3);
                $filter->like('user_mail')->width(3);
                $filter->like('uuid')->width(4);;
                $filter->like('user_type')->select($user_type)->width(3);
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
            $form->select('user_type')->options(UserType::all()->pluck(['type'], 'uuid')->toArray());
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
            $form->select('user_level')->options([0 => '普通用户', 1 => 'VIP', 2 => 'SVIP', 3 => '超级VIP']);
//            $form->radio('withdraw_authority')->options([1 => '启用', 0 => '禁用'])->default(1);
            $form->textarea('remarks');
            $form->datetime('updated_at')->disable();
            $form->datetime('created_at')->disable();

        });
    }
}
