<?php

namespace App\Admin\Renderable;

use App\Models\Financial\TransactionFlow;
use App\Models\User\User;
use Dcat\Admin\Admin;
use Dcat\Admin\Grid;
use Dcat\Admin\Grid\LazyRenderable;
use Dcat\Admin\Models\Administrator;
use Dcat\Admin\Widgets\Modal;

class WalletDetail
{

    //设置style

    public function handle()
    {
        $user_id = request()->get('package_name');
        $current  = request()->get('current');
        $list = TransactionFlow::query()->where('user_id', $user_id)->orderBy('created_at')->where('currency', $current)->get()->toArray();
        return  view('admin.flow.list',compact('list'));
    }
}
