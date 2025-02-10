<?php

namespace App\Admin\Forms\Financial;

use App\Models\Financial\Withdrawal as Model;
use Dcat\Admin\Contracts\LazyRenderable;
use Dcat\Admin\Traits\LazyWidget;
use Dcat\Admin\Widgets\Form;

class Witndrawa extends Form implements LazyRenderable
{

    use LazyWidget;
    public $title = '提现拒绝';


    public function handle(array $input)
    {
        $user =  \App\Models\Financial\Withdrawal::where('uuid', $this->payload['uuid']);
        $user->update(['status' => 'failed','refused_msg' => $input['reason']]);
        return $this->response()->success('更新成功')->refresh();
    }

    public function form(): void
    {
        $uuid = $this->payload['uuid']??'';
        $msg =  Model::query()->where('uuid', $uuid)->first();
        //禁止修改
        $this->textarea('reason', '拒绝原因')->default($msg->refused_msg);

    }
}
