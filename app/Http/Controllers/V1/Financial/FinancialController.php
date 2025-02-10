<?php

namespace App\Http\Controllers\V1\Financial;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Financial\FinancialRequest;
use App\Http\Services\FinancialService;
use App\Models\Financial\Currency;
use Illuminate\Support\Facades\Log;

class FinancialController extends  BaseController
{


    //用户钱包列表
    public function WalletList(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->WalletList($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }


    //处置列表
    public function RechargeList(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->RechargeList($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }


    //充值
    public function Recharge(FinancialRequest $request)
    {


        try {
            $auth = new FinancialService();
            $response = $auth->Recharge($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }



    //获取充值订单详情
    public function GetRecharge(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->GetRecharge($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }


    //编辑充值 一般用于拒绝后的重新提交
    public function EditRecharge(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->EditRecharge($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }


    //提现
    public function Withdrawal(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->Withdrawal($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }

    }


    //修改钱包提现地址

    public function ChangeWalletWithdrawalAddress(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->ChangeWalletWithdrawalAddress($request);
            return $this->success($response);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }

    }


    //钱包详情
    public function WalletDetail(FinancialRequest $request)
    {
        try {
            $auth = new FinancialService();
            $response = $auth->WalletDetail($request);
            return $this->success($response);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    //获取充值地址
    public function GetRechargeAddress(FinancialRequest $request)
    {
        try {
            //去除-后面的字符串
            $address = explode('-', $request->input('currency'))[0];

            $response = Currency::query()->where('name', $address)->get()->first()->toArray();
            if(empty($response)){
                return $this->fail([],'币种不存在');
            }
            if($response['status_recharge'] != 1){
                return $this->fail([],'该币种暂不支持充值');
            }
            return $this->success($response);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }


}
