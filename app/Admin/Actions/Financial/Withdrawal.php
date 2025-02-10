<?php

namespace App\Admin\Actions\Financial;

use App\Http\Services\Financial\FinancialService;
use Dcat\Admin\Grid\RowAction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Withdrawal extends RowAction
{
    protected $title = '审核通过';


    public function __construct($uuid = null)
    {
        $this->uuid = $uuid;

    }
    public function handle(Request $request)
    {
        $key = $this->getKey();
        $recharge =  \App\Models\Financial\Withdrawal::where('uuid', $key);
        $recharge->update(['status' => 'completed','refused_msg'=>null]);
        //开启充值
        try {
            // 开启事务
            DB::beginTransaction();
            (new FinancialService())->Withdrawal($key);
            // 提交事务
            DB::commit();
        } catch (\Exception $e) {
            // 回滚事务
            DB::rollBack();
            return $this->response()->error($e->getMessage());
        }
        return $this->response()->success('审核通过成功！')->refresh();
    }


    public function confirm()
    {
        return ['确定通过审核？'];
    }

}
