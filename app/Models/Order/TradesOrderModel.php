<?php

namespace App\Models\Order;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *
 * @property int $uuid
 * @property string $order_item 订单号
 * @property string $buy_order_no 买入订单号
 * @property string $sell_order_no 卖出订单号
 * @property string $user_id 用户id
 * @property string $amount 数量
 * @property string $price 单价
 * @property string $entrust_type 委托类型: buy买,sell卖
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereBuyOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereEntrustType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereOrderItem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereSellOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|TradesOrderModel withoutTrashed()
 * @mixin \Eloquent
 */
class TradesOrderModel extends BaseModel
{

    use SoftDeletes;

    protected $table = 'trades_order';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'order_item',
        'buy_order_no',
        'sell_order_no',
        'user_id',
        'amount',
        'price',
        'entrust_type',
    ];
}
