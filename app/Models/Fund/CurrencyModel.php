<?php

namespace App\Models\Fund;

use App\Models\BaseModel;

class CurrencyModel extends BaseModel
{

    protected $table = 'currency';

    protected $primaryKey = 'uuid';
    protected $fillable = [
        'type',
        'symbol',
        'name',
    ];
}
