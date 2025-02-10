<?php

namespace App\Admin\Forms\Auth;

use App\Http\Services\Financial\FinancialService;
use App\Http\Services\User\UserService;
use App\Models\User\User;
use App\Models\User\UserAuthentication;
use App\Models\User\UserAuthentication as Model;
use App\Models\User\UserWallet;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Http\Actions\Extensions\Update;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;
use Illuminate\Support\Facades\DB;

class UserAuthenticationForm extends Form implements LazyRenderable
{

    use LazyWidget;
    public $title = '用户设置';


    public function handle(array $input)
    {
        $uuid = $this->payload['uuid']??'';
        $user_id =  \App\Models\User\UserAuthentication::where('uuid', $uuid)->get()->first();
        UserAuthentication::query()->where('uuid', $uuid)->update(['status' => 'success','refused_msg'=>null]);
        \App\Models\User\User::query()->where('user_id', $user_id->user_id)->update(['real_name_authority' => '1','real_name'=> $user_id->first()->real_name]);
        //给这个用户生成钱包
        try {
            $financialService = new FinancialService();
            $financialService->CreateWallet($user_id->user_id);
        }catch (\Exception $e){
            return $this->response()->error($e->getMessage());
        }
        return $this->response()->success('审核通过成功！')->refresh();
    }

    public function form(): void
    {
        $user_id = $this->payload['uuid']??'';
        $type = $this->payload['type']??'';
        if($type =='look'){
            $user_auth_msg =  Model::query()->where('user_id', $user_id)->first();
            //禁用提交
            $this->disableResetButton();
            $this->disableSubmitButton();
        }else{
            $user_auth_msg =  Model::query()->where('uuid', $user_id)->first();
        }
        //禁止修改
        $this->text('user_mail','邮箱')->default(User::query()->where('user_id', $user_auth_msg->user_id)->value('user_mail'))->readonly();
        $this->text('nationality','国籍')->default($user_auth_msg->nationality)->readonly();
        $this->text('real_name','真实姓名')->default($user_auth_msg->real_name)->readonly();
        //禁止修改
        $this->text('id_number','证件号码')->default($user_auth_msg->id_number)->readonly();
        $this->image('front_image', '身份证正面')->default($user_auth_msg->front_image)->disable();
        $this->image('back_image', '身份证背面')->default($user_auth_msg->back_image)->disable();
        $this->image('handheld_image', '手持身份证')->default($user_auth_msg->handheld_image)->disable();
    }
}
