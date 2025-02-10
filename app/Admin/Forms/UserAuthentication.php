<?php

namespace App\Admin\Forms;

use App\Models\User\User;
use App\Models\User\UserAuthentication as Model;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;

class UserAuthentication extends Form implements LazyRenderable
{

    use LazyWidget;
    public $title = '用户设置';


    public function handle(array $input)
    {
        $user =  \App\Models\User\UserAuthentication::where('uuid', $this->payload['uuid']);
        $user->update(['status' => 'error','refused_msg' => $input['reason']]);
        return $this->response()->success('更新成功')->refresh();
    }

    public function form(): void
    {
        $user_id = $this->payload['uuid']??'';
        $user_auth_msg =  Model::query()->where('uuid', $user_id)->first();
        $this->textarea('reason', '拒绝原因')->default($user_auth_msg->refused_msg);

    }
}
