<?php

namespace App\Models\User;

use App\Models\BaseModel;
use Illuminate\Support\Facades\Storage;
use Ramsey\Uuid\Uuid;

/**
 *
 *
 * @property string $uuid
 * @property string|null $user_id 用户user_id
 * @property string|null $nationality 国籍
 * @property string|null $real_name 真实姓名
 * @property string|null $id_number 身份证号
 * @property string|null $front_image 身份证正面
 * @property string|null $back_image 身份证反面
 * @property string|null $handheld_image 手持照片
 * @property string|null $refused_msg 拒绝原因
 * @property int|null $status 1:成功
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereBackImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereFrontImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereHandheldImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereIdNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereNationality($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereRefusedMsg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuthentication whereUuid($value)
 * @mixin \Eloquent
 */
class UserAuthentication extends BaseModel
{

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    protected $table = 'user_authentication';
    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
            }
        });
    }


}
