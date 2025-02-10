<?php

namespace App\Models\Financial;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Withdrawal extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'withdrawal';

    protected $primaryKey = 'uuid';
}
