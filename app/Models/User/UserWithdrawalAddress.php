<?php

namespace App\Models\User;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;
use Ramsey\Uuid\Uuid;

class UserWithdrawalAddress extends BaseModel
{
	use HasDateTimeFormatter;
    use softDeletes;
    protected $table = 'user_withdrawal_address';

    protected $primaryKey = 'uuid';
    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
            }
        });
    }

}
