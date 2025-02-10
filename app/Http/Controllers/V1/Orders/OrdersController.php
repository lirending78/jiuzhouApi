<?php

namespace App\Http\Controllers\V1\Orders;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Orders\OrdersRequest;
use App\Http\Services\Orders\OrdersService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Log;

class OrdersController extends BaseController
{
    /**
     * 发布卖出
     *
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     * @author fable
     */
    public function sendSellOrders(OrdersRequest $request, OrdersService $service): JsonResponse
    {
        try {
            $service->sendC2cOrders($request, 'sell');
            return $this->success();
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    /**
     * 发布买入
     *
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     * @author fable
     */
    public function sendBuyOrders(OrdersRequest $request, OrdersService $service): JsonResponse
    {
        try {
            $service->sendC2cOrders($request, 'buy');
            return $this->success();
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    /**
     * 获取交易委托单
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     */
    public function getTradBuy(OrdersRequest $request, OrdersService $service): JsonResponse
    {
        try {
            $request->validatePagination(); // 调用分页验证方法
            $data = $service->getTradBuy($request);
            return $this->success($data);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }

    }

}
