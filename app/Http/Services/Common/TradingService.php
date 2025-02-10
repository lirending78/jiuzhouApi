<?php

namespace App\Http\Services\Common;

use App\Http\Services\BaseService;
use App\Models\Fund\TradingPairModel;

class TradingService extends BaseService
{
    public function getTradingPairs($request) :array
    {
        $page = $request->get('page', 1);
        $page_size = $request->get('page_size', 10);

        return TradingPairModel::query()
            ->where('status', 1)
            ->orderBy('sort')
            ->offset(($page - 1) * $page_size)
            ->limit($page_size)
            ->get()
            ?->toArray();
    }
}
