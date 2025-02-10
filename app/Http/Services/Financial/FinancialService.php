<?php

namespace App\Http\Services\Financial;

use App\Models\User\Withdrawal;
use App\Http\Services\BaseService;
use App\Http\Services\User\UserService;
use App\Models\Financial\RechargeRecord;
use App\Models\Financial\TransactionFlow;
use App\Models\User\UserWallet;
use Illuminate\Support\Facades\Log;


class FinancialService extends BaseService
{

  //充值 后台审核
    public function Recharge($uuid)
    {

        //充值订单
        $recharge = RechargeRecord::query()->where('uuid', $uuid)->first();

        $current_detail = (new Currency())->current(strtoupper($recharge['recharge_type']));
        if ($current_detail['status_recharge'] != 1) {
            throw new \Exception('该币种现不支持充值');
        }
        //获取用户此类币种钱包
       //获取钱包uuid
        $wallet_uiud = $this->GetWalletUuidByUserId($recharge->user_id,$recharge->recharge_type);
        //钱包充值
        $wallet = UserWallet::query()->where('uuid', $wallet_uiud)->first();
        $wallet->money = $wallet->money + $recharge->num;
        if ($wallet->save()) {
            //交易流水
            $model = new TransactionFlow();
            $model->user_id = $recharge->user_id;
            $model->transaction_no = $recharge->recharge_order_number;
            $model->amount = $recharge->num;
            $model->currency = strtoupper($recharge->recharge_type);
            $model->transaction_type = 'deposit';
            $model->status = 'completed';
            $model->payment_method = 'Manual recharge';
            $model->save();

            Log::channel('wallet')->info('用户往'.strtoupper($recharge->recharge_type).'充值了'.$recharge->num, [
                'data' => json_encode([
                    'num'=> $recharge->num,
                ]),
                'phone' => (new UserService())->GetUserMobile($recharge->user_id),
                'ip' => (new UserService())->GetIp(),
            ]);
            return true;
        }else{
            throw new \Exception('充值失败');
        }

    }


    //根据用户id和币种获取钱包
    public function GetWalletUuidByUserId($user_id,$currency)
    {
        $wallet = UserWallet::query()->where('user_id', $user_id)->where('currency', $currency)->first();
        if ($wallet) {
            return $wallet->uuid;
        }else{
            return $this->AddWalletByUserId($user_id,$currency);
        }

    }

    //新增钱包
    public function AddWalletByUserId($user_id,$currency)
    {
        //检查是否有此类币种钱包
        $wallet = UserWallet::query()->where('user_id', $user_id)->where('currency', $currency)->first();
        if (!$wallet) {
            $wallet = new UserWallet();
            $uuid =  \Ramsey\Uuid\Uuid::uuid4()->toString();
            $wallet->user_id = $user_id;
            $wallet->currency = strtoupper($currency);
            $wallet->money = 0;
            $wallet->uuid = $uuid;
            if ($wallet->save()) {
                Log::channel('wallet')->info('用户创建钱包', [
                    'data' => json_encode([
                        'user'=> (new UserService())->GetUserMobile($user_id),
                    ]),
                    'phone' => (new UserService())->GetUserMobile($user_id),
                    'ip' => (new UserService())->GetIp(),
                ]);
                return $uuid;
            }else{
                throw new \Exception('创建钱包失败');
            }
        }
    }

    //获取充值订单号
    public function GetOrderNumber($type = 'r')
    {
        return $type.date('YmdHis').rand(100000, 999999);
    }


    //根据钱包uuid获取钱包
    public function GetWalletByUuid($uuid)
    {
        return UserWallet::query()->where('uuid', $uuid)->first();
    }


    //提现 后台审核后
    public function Withdrawal($uuid)
    {
        //充值订单
        $withdrawal = Withdrawal::query()->where('uuid', $uuid)->first();
        //获取币种是否允许被提现
        $current_detail = (new Currency())->current($withdrawal['current']);
        if ($current_detail['status_withdrawal'] != 1) {
            throw new \Exception('该币种现不支持提现');
        }
        //获取用户此类币种钱包
        //获取钱包uuid
        $wallet_uuid = $this->GetWalletUuidByUserId($withdrawal->user_id,$withdrawal->current);
        //获取此类币种充值状态

        //钱包充值
        $wallet = UserWallet::query()->where('uuid', $wallet_uuid)->first();
        if ($wallet->money <= 0 || $wallet->money < $withdrawal->decimal ) {
            throw new \Exception('余额不足');
        }
        $wallet->money = $wallet->money - $withdrawal->decimal;
        if ($wallet->save()) {
            //交易流水
            $model = new TransactionFlow();
            $model->user_id = $withdrawal->user_id;
            $model->transaction_no = $withdrawal->withdrawal_order_num;
            $model->amount = $withdrawal->decimal;
            $model->currency = strtoupper($withdrawal->current);
            $model->transaction_type = 'withdrawal';
            $model->status = 'completed';
            $model->payment_method = 'Manual recharge';
            $model->save();
            Log::channel('wallet')->info('用户在'.strtoupper($withdrawal->recharge_type).'提现了'.$withdrawal->num, [
                'data' => json_encode([
                    'num'=> $withdrawal->num,
                ]),
                'phone' => (new UserService())->GetUserMobile($withdrawal->user_id),
                'ip' => (new UserService())->GetIp(),
            ]);
            return true;
        }else{
            throw new \Exception('提现失败');
        }

    }

    //用户审核通过创建钱包
    public function CreateWallet($user_id){
        $all_currency = $this->GetAllCurrency();
        foreach ($all_currency as $v){
            try {
                $this->AddWalletByUserId($user_id, $v->name);
            } catch (\Exception $e) {
                throw new \Exception($e->getMessage());
            }
        }

    }

    //获取所有币种
    public function GetAllCurrency()
    {
        return \App\Models\Financial\Currency::query()->get();
    }




}
