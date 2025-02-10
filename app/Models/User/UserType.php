<?php

namespace App\Models\User;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;

class UserType extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'user_type';

    protected $primaryKey = 'uuid';
}
