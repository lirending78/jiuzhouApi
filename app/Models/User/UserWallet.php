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
}
