<?php

namespace App\Models\User;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Ramsey\Uuid\Uuid;

class UserNetwork extends BaseModel
{
	use HasDateTimeFormatter;
    protected $primaryKey = 'uuid';

    protected $table = 'user_network';
    protected static function booted()
    {
        static::creating(function ($tabs) {
            if (! $tabs->getKey()) {
                $tabs->{$tabs->getKeyName()} = (string) Uuid::uuid4(); //方式1：uuid插件
                $tabs->updated_at = now();
            }
        });
    }
}
