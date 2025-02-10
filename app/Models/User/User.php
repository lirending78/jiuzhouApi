<?php

namespace App\Models\User;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\HasApiTokens;
use Ramsey\Uuid\Uuid;
use Tymon\JWTAuth\Contracts\JWTSubject;

/**
 *
 *
 * @property string $uuid
 * @property string|null $user_id
 * @property string|null $user_name 用户名
 * @property string|null $real_name 真实姓名
 * @property int|null $user_level 会员等级
 * @property string|null $user_mail 用户邮箱
 * @property string|null $login_password 登录密码
 * @property string|null $safe_password 资金密码
 * @property string|null $user_mobile 手机号码
 * @property string|null $user_regip 注册IP
 * @property string|null $user_lasttime 最后登录时间
 * @property string|null $user_lastip 最后登录IP
 * @property string|null $user_recom 推荐人
 * @property int $status 状态 1 正常 0 无效
 * @property string|null $user_code 用户编号
 * @property int|null $real_name_authority 实名认证
 * @property string|null $remarks 备注
 * @property int|null $is_online 是否在线
 * @property int|null $is_lock 锁定用户  不可下单和提现
 * @property int|null $documentary_status 跟单状态
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDocumentaryStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsLock($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLoginPassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRealName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRealNameAuthority($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSafePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserLastip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserLasttime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserRecom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUserRegip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUuid($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable implements JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable,HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    protected $table = 'user';
    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
                $tabs->updated_at = now();
                //$tabs->{$tabs->getKeyName()} = (string) Str::uuid();; //方式2：Str方法
            }
        });
    }
    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }



    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    //根据user_id获取所有子用户
    public function GetAllUser($userId)
    {
        $descendantIds = UserNetwork::query()
            ->join('user', 'user_network.ancestor_id', '=', 'user.user_id')
            ->where('user_network.ancestor_id', '=', $userId)
            ->where('user_network.level', '>', 0) // 排除自己
            ->orderBy('user_network.level') // 从最近上级到顶级
            ->select( 'user_network.level','user_network.descendant_id')
            ->pluck('descendant_id'); // 获取所有子用户 ID


        // 返回子用户的查询构造器
        return $this->whereIn('user_id', $descendantIds);
    }

    public function getAvatarAttribute($value)
    {
        if (empty($value)) {
            return '';
        }

        // 如果已经是完整URL，直接返回
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        // 使用 admin disk 的 URL
        return Storage::disk('admin')->url($value);
    }





}
