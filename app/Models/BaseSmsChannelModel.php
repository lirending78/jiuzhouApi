<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\SortableTrait;

/**
 * 
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel ordered(string $direction = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseSmsChannelModel withoutTrashed()
 * @mixin \Eloquent
 */
class BaseSmsChannelModel extends BaseModel
{
    use SoftDeletes,SortableTrait;

    protected $table = 'base_cms_channel';

    protected $primaryKey = 'uuid';

    protected $fillable = [
        'name',
        'channel_sign',
        'api_key',
        'api_secret',
        'api_url',
        'is_active'
    ];
    protected array $sortable = [
        // 设置排序字段名称
        'order_column_name' => 'sort',
        // 是否在创建时自动排序，此参数建议设置为true
        'sort_when_creating' => true,
    ];
}
