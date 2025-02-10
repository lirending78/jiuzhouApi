<?php

namespace App\Models\Fund;

use App\Models\BaseModel;

class CurrencyModel extends BaseModel
{

    protected $table = 'currencies';

    protected $primaryKey = 'uuid';
    protected $fillable = [
        'type',
        'symbol',
        'name',
    ];
}
