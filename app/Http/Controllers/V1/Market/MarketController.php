<?php
namespace App\Http\Controllers\V1\Market;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Market\MarketRequest;
use App\Http\Services\FinancialService;
use App\Services\MarketService;
use Dcat\Admin\Layout\Content;
use Illuminate\Support\Facades\Http;

class MarketController extends BaseController
{
    //根据币种获取现价
    public function GetCurrentPrice(MarketRequest $request)
    {
        try {
            $currency = $request->input('symbol');
            //如果有/ 则取前面部分
            if (strpos($currency, '/')!== false) {
                $currency = explode('/', $currency)[0];
            }
            $service =  new MarketService();
           $price =   $service->getPrice($currency);
           return $this->success(['price' => $price]);
    }catch (\Exception $e){
        return $this->fail([],$e->getMessage());
    }

    }
}
