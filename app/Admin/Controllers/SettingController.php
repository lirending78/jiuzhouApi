<?php

namespace App\Admin\Controllers;


use App\Models\Setting;
use Dcat\Admin\Form;
use Dcat\Admin\Grid;
use Dcat\Admin\Layout\Content;
use Dcat\Admin\Http\Controllers\AdminController;
use Dcat\Admin\Layout\Row;
use Dcat\Admin\Widgets\Tab;
use Illuminate\Http\Request;
use App\Admin\Actions\Form\CheckEmail;
use Weiwait\DcatEasySms\Forms\SmsConfig;
use Weiwait\DcatEasySms\Models\SmsGateway;

class SettingController extends AdminController
{

    public function index(Content $content)
    {
        $tab = Tab::make();
//        $tab->add('短信', new SmsConfig());
//        $tab->add('基本设置', new SmtpConfig());
        $tab->add('用户设置', $this->form());
//        $channelsTable = $this->getChannelsTable();
        $content->title('配置')
            ->row(function (Row $row) use ($tab) {
                $row->column(12, $tab->withCard());
//                $row->column(6, $channelsTable);
            });
        return $content;
//        return $content->title('设置')->description('')->body($this->form());
    }


    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        return Form::make(new Setting(), function (Form $form) {
            //禁用继续添加按钮
            $form->disableCreatingCheck();
            $form->disableViewCheck();
            $form->disableEditingCheck();
            $form->disableHeader();
            //设置表单默认值

            $form->tab('基本设置', function (Form $form) {
                $form->text('web_name', '网站名称')->default((new Setting)->getValue('web_name'));
                $form->text('web_domain', '网站域名')->default((new Setting)->getValue('web_domain'));
                $form->photo('web_logo', '网站LOGO')->default((new Setting)->getValue('web_logo'));
                $form->text('web_icp', '备案信息')->default((new Setting)->getValue('web_icp'));
                $form->text('web_email', '站长邮箱')->default((new Setting)->getValue('web_email'));
                $form->text('web_keywords', '关键字')->default((new Setting)->getValue('web_keywords'));
                $form->text('web_description', '网站描述')->default((new Setting)->getValue('web_description'));
            });
            //给tab设置新名字
            $form->tab('邮件设置',function (Form $form){
                $form->email('send_email','发送邮箱')->setLabelClass(['asterisk'])->default((new Setting)->getValue('send_email'));
                $form->password('password','密码')->help('部分邮箱使用授权码')->setLabelClass(['asterisk'])->default((new Setting)->getValue('password'));
                $form->text('smtp','SMTP服务器')->help('例如：smtp.qq.com。若不知道请咨询邮箱提供商')->setLabelClass(['asterisk'])->default((new Setting)->getValue('smtp'));
                $form->text('port','端口')->help('常见端口：25、465、587。若不知道请咨询邮箱提供商')->setLabelClass(['asterisk'])->default((new Setting)->getValue('port'));
                $form->switch('is_ssl','ssl')->default(1)->help('465端口一般为SSL加密，587端口一般为TLS加密')->setLabelClass(['asterisk'])->default((new Setting)->getValue('is_ssl'));
                $form->html(new CheckEmail())->help('将会向你的邮箱发送一封测试邮件');
            });
            $form->tab('撮合设置',function (Form $form){
                $form->radio('c2c_type','交易类型')->options(['1' => '平台交易', '2' => '个人交易'])->default((new Setting)->getValue('c2c_type'));

            });
//            $form->tab('用户设置', function (Form $form) {
//
//            });
            $form->action(admin_url('admin_setting'));
            $form->saving(function ( Form $form) {
                $data = \request()->all();
                unset($data['_token'], $data['_method'], $data['_file_']);
                $model = new Setting();
                foreach ($data as $key => $value) {
                    $exist = $model->where('slug', $key)->first();
                    if ($exist) {
                        if ($exist->value != $value) {
                            $model->where('slug', $key)->update(['value' => $value]);
                        }
                    }else{
                        $model->insert(['slug' => $key, 'value' => $value]);
                    }
                }
                return $form->response()->success('设置保存成功')->refresh();
            });

        });
    }


    public function getChannelsTable()
    {
        // 获取所有的短信通道

        // 创建表格组件
        $Grid = Grid::make(new SmsGateway(),function (Grid $grid){

            $grid->disableActions();
            $grid->disableRowSelector();
            $grid->disableRefreshButton();
            $grid->disableCreateButton();
            $grid->model()->orderBy('sort');
            $grid->simplePaginate();
            $grid->column('id')->hide();
            $grid->column('name');
            $grid->column('gateway','标识');
            $grid->column('sort','排序')->orderable();
            $grid->column('status','状态')->switch();
        });


        return $Grid;
    }

}
