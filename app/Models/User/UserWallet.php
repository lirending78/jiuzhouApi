<?php

namespace App\Models\User;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class UserWallet extends Model
{
	use HasDateTimeFormatter;

    public $incrementing = false;
    protected $keyType = 'string';

    protected $table = 'user_wallet';

    protected $primaryKey = 'uuid';

    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
                $tabs->created_at = now();
            }
        });
    }
    //创建触发器 money freeze_money 这两个字段返回调用 remove_zero_tail 函数处理后的金额

    public function getMoneyAttribute($value)
    {
        return remove_zero_tail($value);
    }
    public function getFreezeMoneyAttribute($value)
    {
        return remove_zero_tail($value);
    }

}
