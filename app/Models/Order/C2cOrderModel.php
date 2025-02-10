<?php

namespace App\Models\Order;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 *
 *
 * @property string $uuid
 * @property string $order_no 订单号
 * @property string $user_id 用户id
 * @property string $entrust_type 委托类型: buy买,sell卖
 * @property string $order_type 订单类型: DC数字货币, ETF基金, WH 外汇, CO大宗交易
 * @property string $amount 订单总数量
 * @property string $remaining_amount 订单未成交数量
 * @property string $total_price 委托价格总价
 * @property string $unit_price 委托价格单价
 * @property string $currency 交易币种：IDR_USDT .....
 * @property string $currency_ratio 币种比率
 * @property int $pay_type 支付方式：待定 1：钱包
 * @property int $pay_status 订单状态（0:待匹配,1:部分成交, 2:完全成交 3:主动取消等）
 * @property string|null $cancel_time 订单取消时间
 * @property string|null $closes_time 订单关闭时间
 * @property string|null $handle_time 最近处理时间
 * @property string|null $order_param 订单补充信息
 * @property int|null $trade_count 订单的匹配次数，每次部分成交或完全成交增加 1
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereCancelTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereClosesTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereCurrency($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereCurrencyRatio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereEntrustType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereHandleTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereOrderNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereOrderParam($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereOrderType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel wherePayStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel wherePayType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereRemainingAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereTradeCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereUnitPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel whereUuid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|C2cOrderModel withoutTrashed()
 * @mixin \Eloquent
 */
class C2cOrderModel extends BaseModel
{
    use SoftDeletes;

    protected $table = 'c2c_order';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'order_no',
        'user_id',
        'entrust_type',
        'order_type',
        'amount',
        'remaining_amount',
        'total_price',
        'unit_price',
        'currency',
        'currency_ratio',
        'pay_type',
        'pay_status',
        'cancel_time',
        'closes_time',
        'handle_time',
        'order_param',
        'trade_count'
    ];

    protected $casts = [
        'remaining_amount' => 'string',
        'total_price' => 'string',
        'unit_price' => 'string',
        'amount' => 'string',
        // 其他字段
    ];
}
