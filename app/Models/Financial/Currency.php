<?php

namespace App\Models\Financial;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'currency';

    protected $primaryKey = 'uuid';

    //定义字段属性 network 为json
    protected $casts = [
        'network' => 'json',
    ];

}
