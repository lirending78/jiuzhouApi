<?php

namespace App\Admin\Actions\Grid;

use App\Http\Services\Financial\FinancialService;
use App\Models\User\UserWithdrawalAddress as Wallet;
use Dcat\Admin\Grid\RowAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WithdrawalAddressCheck extends RowAction
{
    protected $title = '审核通过';
    protected $uuid;

    public function __construct($uuid = null)
    {
        $this->uuid = $uuid;

    }
    public function handle(Request $request)
    {
        $key = $this->getKey();
        $update = Wallet::query()->where('uuid', $key)->update(['status' => 'active']);
        if ($update) {
        return $this->response()->success('审核通过成功！')->refresh();
        } else {
            return $this->response()->error('审核失败！')->refresh();
        }
    }


    public function confirm()
    {
        return ['确定通过审核？'];
    }
}
