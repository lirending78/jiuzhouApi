<?php

namespace App\Models\User;

use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Uuid\Uuid;

class UserDepositAddress extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'user_deposit_addresses';

    protected $primaryKey = 'uuid';
    public $incrementing = false;
    protected $keyType = 'string';

    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
                $tabs->created_at = now();
                //$tabs->{$tabs->getKeyName()} = (string) Str::uuid();; //方式2：Str方法
            }
        });
    }
}
