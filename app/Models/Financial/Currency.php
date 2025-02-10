<?php

namespace App\Models\Financial;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;
    use HasUuids;

    protected $table = 'currency';
    protected $keyType = 'string';
    protected $primaryKey = 'uuid';

    //定义字段属性 network 为json
    protected $casts = [
        'network' => 'json',
    ];

}
