<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

/**
 * 
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|News withoutTrashed()
 * @mixin \Eloquent
 */
class News extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    protected $table = 'news';
    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
            }
        });
    }

}
