<?php

namespace Weiwait\DcatEasySms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;
use Spatie\EloquentSortable\SortableTrait;

class SmsGateway extends Model
{
    use SortableTrait;
    protected $casts = [
        'configs' => 'array',
    ];

    protected $fillable = [
        'gateway', 'name', 'configs'
    ];
    protected array $sortable = [
        // 设置排序字段名称
        'order_column_name' => 'sort',
        // 是否在创建时自动排序，此参数建议设置为true
        'sort_when_creating' => true,
    ];
    public static function gateways(): array
    {
        return self::query()->where('status',1)->orderBy('sort')->get()->map(function (self $gateway) {
            return [$gateway->gateway => collect($gateway->configs)->map(function ($item) use ($gateway) {
                return [$item['key'] => SmsConfig::get($gateway->gateway . '@' . $item['key'])];
            })->collapse()];
        })->collapse()->toArray();
    }
}
