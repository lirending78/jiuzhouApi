<?php

namespace App\Http\Services\Financial;

use App\Http\Services\BaseService;
use App\Models\Financial\Currency as CurrencyModel;

class Currency extends BaseService
{


    //获取指定币种信息
    public function current($currency)
    {
        $current = CurrencyModel::query()->where('name', strtoupper($currency))->first();

        if($current){
            return $current->toArray();
        }else{
            throw new \Exception('币种不存在');
        }

    }




}
