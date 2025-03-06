<?php

namespace App\Http\Controllers\V1\Orders;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Orders\OrdersRequest;
use App\Http\Services\Orders\OrdersService;
use App\Models\Order\C2cOrderModel;
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
            if($request->get('type') == 'market'){
                //验参
                $request->validate(['amount' =>'required|numeric','currency' =>'required'],['amount.required' => '数量不能为空', 'currency.required' => '交易对不能为空']);
                $service->marketTradeSell($request);
            }elseif($request->get('type') == 'limit'){
                $service->sendC2cOrders($request, 'sell');
            }else{
                return $this->fail([], '订单类型错误');
            }
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
            if($request->get('type') == 'market'){
                $request->validate(['amount' =>'required|numeric','currency' =>'required'],['amount.required' => '数量不能为空', 'currency.required' => '交易对不能为空']);

                $service->marketTradeBuy($request);
            }elseif($request->get('type') == 'limit'){
                $service->sendC2cOrders($request, 'buy');
            }else{
                return $this->fail([], '订单类型错误');
            }
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

    /**
     * 取消订单
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     */
    public function cancelOrder(OrdersRequest $request, OrdersService $service): JsonResponse
    {
        try {
            $request->validate(['order_no' =>'required']);
            $service->cancelOrder($request->input('order_no'));
            return $this->success();
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    /**
     * 订单列表
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     */
    public function OrderList(OrdersRequest $request, OrdersService $service): JsonResponse
    {
        try {
            $query['user_id'] = auth()->user()->user_id;
            if($request->has('pay_status')){
                $query['pay_status'] = request('pay_status');
            }
            if($request->has('symbol')){
                $query['currency'] = request('symbol');
            }
            $list = C2cOrderModel::query()
                    ->where($query)
                    ->orderBy('created_at', 'desc')
                    ->get();
            return $this->success($list);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    /**
     * 订单详情
     * @param OrdersRequest $request
     * @param OrdersService $service
     * @return JsonResponse
     */
   public function OrderDetail(OrdersRequest $request, OrdersService $service): JsonResponse
   {
       try {
           $request->validate(['order_no' => 'required'], ['order_no.required' => '订单号不能为空']);
           $order = C2cOrderModel::query()
               ->where('order_no', $request->input('order_no'))
               ->where('user_id', auth()->user()->user_id)
               ->first();
           if (!$order) {
               return $this->fail([], '订单不存在');
           }
           return $this->success($order);
       } catch (\Exception $e) {
           return $this->fail([], $e->getMessage());
       }

   }

}
