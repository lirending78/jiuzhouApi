<?php

namespace App\Http\Controllers\V1\Financial;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Financial\FinancialRequest;
use App\Http\Services\FinancialService;
use App\Models\Financial\Currency;
use App\Models\Financial\RechargeRecord;
use App\Models\Financial\Withdrawal;
use Illuminate\Support\Facades\Cache;
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
    //充值记录
    public function RechargeRecode(FinancialRequest $request)
    {
        try {
             $list = RechargeRecord::query()->orderBy('created_at')->where('user_id',auth()->user()->user_id)->get()->toArray();
            return $this->success($list);
        }catch (\Exception $e){
            return $this->fail([],$e->getMessage());
        }
    }
    //提现记录
    public function WithdrawalRecord(FinancialRequest $request){
        try {
            $list = Withdrawal::query()->where('user_id',auth()->user()->user_id)->get()->toArray();
            return $this->success($list);
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
    //新增提现地址
    public function AddWithdrawalAddress(FinancialRequest $request){
        $lock = Cache::lock('add_withdrawal_address_' .auth()->user()->id, 3);

        if (!$lock->get()) {
            throw new \Exception('操作过于频繁，请稍后再试');
        }
        try {
            $auth = new FinancialService();
            $response = $auth->AddWithdrawalAddress($request);
            return $this->success($response);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }
    //编辑提现地址
    public function EditWithdrawalAddress(FinancialRequest $request){
        try {
            $auth = new FinancialService();
            $response = $auth->AddWithdrawalAddress($request,'edit');
            return $this->success($response);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }
    //删除提现地址
    public function DelWithdrawalAddress(FinancialRequest $request){
        try {
            $auth = new FinancialService();
            $response = $auth->AddWithdrawalAddress($request,'del');
            return $this->success($response);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }

    //提现地址列表
    public function WithdrawalAddressList(FinancialRequest $request){

        if(!$request->input('wallet_type')){
            return $this->fail([],'参数错误');
        }
        $type = $request->input('wallet_type');
        try {
            $user_id = auth()->user()->user_id;
            $list = \App\Models\User\UserWithdrawalAddress::query()->where('user_id', $user_id)->where('wallet_type',$type)->get()->toArray();
            return $this->success($list);
        } catch (\Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }


}
