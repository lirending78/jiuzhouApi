<?php

namespace App\Admin\Forms;

use App\Models\Financial\RechargeRecord as Model;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;

class Recharge extends Form implements LazyRenderable
{

    use LazyWidget;
    public $title = '充值拒绝';


    public function handle(array $input)
    {
        $user =  \App\Models\Financial\RechargeRecord::where('uuid', $this->payload['uuid']);
        $user->update(['status' => 0,'refused_msg' => $input['reason']]);
        return $this->response()->success('更新成功')->refresh();
    }

    public function form(): void
    {
        $uuid = $this->payload['uuid']??'';
        $user_auth_msg =  Model::query()->where('uuid', $uuid)->first();
        //禁止修改
        $this->textarea('reason', '拒绝原因')->default($user_auth_msg->refused_msg);

    }
}
