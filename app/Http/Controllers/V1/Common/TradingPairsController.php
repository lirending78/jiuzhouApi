<?php

namespace App\Http\Controllers\V1\Common;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Orders\GetTradingPairsRequest;
use App\Http\Services\Common\TradingService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TradingPairsController extends BaseController
{
    /**
     * @param Request $request
     * @param TradingService $service
     * @return JsonResponse
     */
    public function getTradingPairs(GetTradingPairsRequest $request, TradingService $service): JsonResponse
    {
        try {
            $request->validatePagination(); // 调用分页验证方法
            $data = $service->getTradingPairs($request);
            return $this->success($data);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }
}
