<?php

namespace App\Admin\Actions\Grid;

use App\Models\Fund\TradingPairModel;
use Dcat\Admin\Grid\Tools\AbstractTool;
use Dcat\Admin\Traits\HasPermissions;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class OperateRelease extends AbstractTool
{

    protected $style = 'btn btn-outline-primary waves-effect';
    /**
     * @return string
     */
	protected $title = '更新缓存';



    public function handle(Request $request)
    {

        $symbols = TradingPairModel::query()->where('status', 1)->orderBy('sort')->pluck('symbol')->toArray();   // 获取 symbol 列->toArray();     // 转为数组 ?? [];
        // 清空 Redis 列表

        // 将交易对写入 Redis 列表
        if (!empty($symbols)) {
            Redis::del(MATCH_CURRENCY);

            Redis::rPush(MATCH_CURRENCY, ...$symbols);
            return $this->response()->success('已同步交易对到 Redis')->refresh();

        }
        return $this->response()->error('同步失败')->refresh();

    }
    /**
     * @param Model|Authenticatable|HasPermissions|null $user
     *
     */
    public function confirm()
    {
        return ['您确定要发布最新配置嘛？', '确认信息内容'];

    }

    /**
     * @return array
     */
    protected function parameters(): array
    {
        return [];
    }
}
