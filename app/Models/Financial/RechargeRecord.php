<?php

namespace App\Models\Financial;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\SoftDeletes;

class RechargeRecord extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'user_recharge_record';

    protected $primaryKey = 'uuid';
}
