<?php

namespace App\Models\Financial;

use App\Models\BaseModel;
use Dcat\Admin\Traits\HasDateTimeFormatter;
use Faker\Provider\Base;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionFlow extends BaseModel
{
	use HasDateTimeFormatter;
    use SoftDeletes;

    protected $table = 'transaction_flow';

    protected $primaryKey = 'uuid';

    public function getAmountAttribute($value)
    {
        return remove_zero_tail($value);
    }
    public function getFreezeMoneyAttribute($value)
    {
        return remove_zero_tail($value);
    }
}
