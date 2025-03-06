<?php

namespace App\Http\Services;

use App\Http\Controllers\V1\Common\ValidateController;
use App\Http\Services\Common\SmsService;
use App\Http\Services\Financial\Currency;
use App\Http\Services\Financial\FinancialService as Service;
use App\Http\Services\User\UserService;
use App\Models\Financial\Bank;
use App\Models\Financial\Currency as CurrencyModel;
use App\Models\Financial\RechargeRecord;
use App\Models\Financial\TransactionFlow;
use App\Models\User\UserWallet;
use App\Models\User\UserWithdrawalAddress;
use App\Services\MarketService;


class FinancialService extends BaseService
{


    //用户钱包列表
    public function WalletList($data)
    {
         return UserWallet::query()
            ->where('user_id',auth()->user()->user_id)
            ->get()
            ->transform(function ($item) {
                //折合usdt
                if ($item->currency == 'USDT') {
                    $item->usdt = remove_zero_tail($item->money)  +  remove_zero_tail($item->freeze_money);
                } else {
                    $item->usdt = remove_zero_tail(($item->money + $item->freeze_money ) * (new MarketService())->getPrice($item->currency));
                }
                return $item;
            })
            ->toArray();
    }

    //获取充值列表
    public function RechargeList($data){
        $currency_list = CurrencyModel::query()->where('status_recharge',1)->get()->toArray();
        $data = [];
        foreach ($currency_list as $key => $value) {

            foreach ($value['network'] as $vv){
                $data[] = $value['name']. '-'. $vv;
            }
        }
        return $data;
    }





    //用户充值
    public function Recharge($data)
    {
        $data->validate([
            'currency' => 'required',
            'recharge_credentials' => 'required',
            'amount' => 'required'
        ],[
            'currency.required' => '请选择币种',
            'recharge_credentials.required' => '请输入充值凭证',
            'amount.required' => '请输入提现金额',
        ]);

        $data['currency'] = explode('-', $data['currency'])[0];

        $user = auth()->user();
        $user_id = $user->user_id;
        if ($user->real_name_authority != 1) {
            throw new \Exception('请先实名认证');
        }
        //数组元素全大写
        $all_currency = array_map('strtoupper', (new Service())->GetAllCurrency()->pluck('name')->toArray());

       if (!in_array(strtoupper($data['currency']), $all_currency)) {
            throw new \Exception('该币种暂不支持充值,如有需要请联系客服');
       }

        //获取币种是否允许被充值
        $current_detail = (new Currency())->current($data['currency']);
        if ($current_detail['status_recharge'] != 1) {
            throw new \Exception('该币种现不支持充值');
        }

        $model = new RechargeRecord();
        $model->user_id = $user_id;
        $model->recharge_type = $data['currency'];
        $model->num = $data['amount'];
        $model->recharge_credentials = $data['recharge_credentials'];
        $model->recharge_order_number = (new Service())->GetOrderNumber();
        $model->save();
    }


    //获取充值订单信息
    public function GetRecharge($data)
    {
        return RechargeRecord::where('uuid', $data['uuid'])->first();
    }

    //修改充值订单信息
    public function EditRecharge($data)
    {
        $model = RechargeRecord::where('uuid', $data['uuid'])->first();
        if (!$model) {
            throw new \Exception('充值订单不存在');
        }
        if ($model->user_id != auth()->user()->user_id) {
            throw new \Exception('不是你的订单你改啥');
        }
        $model->recharge_type = $data['recharge_type'];
        $model->num = $data['num'];
        $model->status = null;
        $model->recharge_credentials = (new UserService())->UploadImage($data['recharge_credentials']);
        $model->save();
    }


    //提现
    public function Withdrawal($data)
    {
        $data->validate([
            'currency' => 'required',
            'withdrawal_credentials' => 'required',
            'amount' => 'required'
        ],[
            'currency.required' => '请选择币种',
            'withdrawal_credentials.required' => '请输入提现凭证',
            'amount.required' => '请输入提现金额',
        ]);

        $user = auth()->user();
        $user_id = $user->user_id;
        //查看用户是否被锁定
        if ($user->is_lock == 1) {
            throw new \Exception('您已被锁定，无法提现');
        }
        if ($user->real_name_authority != 1) {
            throw new \Exception('请先实名认证');
        }
        //获取币种钱包
        $wallet_uuid = (new Service())->GetWalletUuidByUserId($user_id, $data['currency']);
        $wallet = (new Service())->GetWalletByUuid($wallet_uuid);
        //获取币种是否允许被提现
        $current_detail = (new Currency())->current($data['currency']);
        if ($current_detail['status_withdrawal'] != 1) {
            throw new \Exception('该币种现不支持提现');
        }

        if ($wallet->withdrawal_address == '') {
            throw new \Exception('请先设置提现地址');
        }

        if ($data['amount'] <= 0) {
            throw new \Exception('提现金额不能小于0');
        }
        if ($data['amount'] > $wallet->money) {
            throw new \Exception('提现金额不能大于钱包余额');
        }

        //发起提现订单
        $model = new \App\Models\Financial\Withdrawal();
        $model->user_id = $user_id;
        $model->decimal = $data['amount'];
        $model->current = $data['currency'];
        //提现账户
        $model->withdrawal_account = $wallet->withdrawal_address;
        $model->withdrawal_order_num = (new Service())->GetOrderNumber('w');
        $model->withdrawal_credentials = (new UserService())->UploadImage($data['withdrawal_credentials']);
        if ($model){
            $model->save();
            \Illuminate\Support\Facades\Log::channel('wallet')->info('用户创建提现订单', [
                'data' => json_encode([
                    'user'=> (new UserService())->GetUserMobile($user_id),
                ]),
                'phone' => (new UserService())->GetUserMobile($user_id),
                'ip' => (new UserService())->GetIp(),
            ]);
        }else{
            throw new \Exception('创建提现订单失败');
        }
    }


    //修改用户钱包提现地址
    public function ChangeWalletWithdrawalAddress($data)
    {
        //验证
          $data->validate([
            'code' => 'required',
            'current' => 'required',
            'withdrawal_address' => 'required'
        ],[
            'code.required' => '请输入验证码',
            'current.required' => '请选择钱包',
            'withdrawal_address.required' => '请输入钱包提现地址',
        ]);
        $user_mobile = auth()->user()->user_mobile;
        if (!(new SmsService())->checkCode($user_mobile,$data['code'],'change_wallet_withdrawal_address')) {
            throw new \Exception('验证码错误');
        }
        //获取用户钱包列表
        $wallet_list = $this->WalletList($data);
        $wallet_type = array_column($wallet_list, 'currency');
        $wallet_type = array_map('strtoupper', $wallet_type);
        if (!in_array(strtoupper($data['current']), $wallet_type)) {
            throw new \Exception('钱包不存在');
        }
        $wallet = UserWallet::query()->where('user_id', auth()->user()->user_id)->where('currency',strtoupper($data['current']))->first();
        $wallet->withdrawal_address = $data['withdrawal_address'];
        $wallet->save();
        \Illuminate\Support\Facades\Log::channel('wallet')->info('钱包提现地址修改成功', [
            'phone' => $data['user_mobile'],
            'data'=>json_encode($data),
            'user_id'=> auth()->user()->user_id,
        ]);
    }


    //钱包详情
    public function WalletDetail($data)
    {
        $data->validate([
            'currency' => 'required',
        ],[
            'currency.required' => '请选择钱包',
        ]);

        $user_id = auth()->user()->user_id;
        $current  =  strtoupper($data['currency']);
        return TransactionFlow::query()->where('user_id', $user_id)->orderBy('created_at')->where('currency', $current)->get()->toArray();
    }
    //币种余额
    public function CurrencyBalance($data)
    {
        $data->validate([
            'currency' => 'required',
        ],[
            'currency.required' => '请选择币种',
        ]);

        $user_id = auth()->user()->user_id;
        $current  = $data['currency'];
        $wallet = UserWallet::query()->where('user_id', $user_id)->where('currency', $current)->first();
        if (!$wallet) {
            return 0;
        }
        return $wallet->money;
    }


    //新增提现地址
    public function AddWithdrawalAddress($data,$type = 'add')
    {
        //校验资金密码

//        (new ValidateController())->validateFundPassword($data['pay_password']);

        if($type == 'del'){
            $data->validate([
                'uuid' => 'required',
            ], [
                'uuid.required' => '请选择地址',
            ]);
            $model = UserWithdrawalAddress::query()->where('user_id', auth()->user()->user_id)->where('uuid', $data['uuid'])->first();
            if($model){
                $model->delete();
                return true;
            }else{
                throw new \Exception('地址不存在');
            }
        }
        $data->validate([
            'wallet_type' => 'required',
        ], [
             'wallet_type.required' => '请选择类型',
        ]);
        if($type == 'edit'){
            $data->validate([
                'uuid' => 'required',
            ], [
                'uuid.required' => '请选择地址',
            ]);
        }
        $user = auth()->user();
        if ($type == 'edit'){
            $model = UserWithdrawalAddress::query()->where('user_id', $user->user_id)->where('uuid', $data['uuid'])->first();
        }else{
            $model = new UserWithdrawalAddress();
        }

        if ($data['wallet_type'] == 'bankcard') {
            //银行卡提现
            if ($type != 'edit') {
                $data->validate([
                    'card_number' =>'unique:user_withdrawal_address,card_number'
                    ], [
                        'card_number.unique' => '该银行卡号已存在',
                    ]);
            }
            $data->validate([
                'card_number' => 'required',
                'bank_name' => 'required',
                'holder_name' => 'required',
            ], [
                'card_number.required' => '请输入银行卡号',
                'card_number.unique' => '该银行卡号已存在',
                'bank_name.required' => '请输入银行名称',
                'holder_name.required' => '请输入持卡人姓名',
            ]);

            $checkBankNum = (new ValidateController())->validateCardNumber($data['card_number']);

            if(!$checkBankNum){
                throw new \Exception('银行卡号格式错误');
            }

            $model->user_id = $user->user_id;
            $model->card_number = $data['card_number'];
            $model->bank_name = $data['bank_name'];
            $model->holder_name = $data['holder_name'];
            $model->wallet_type = $data['wallet_type'];
            //保存

            if ($model->save()){
                return true;
            }else{
                throw new \Exception('添加提现地址失败');
            }
        }elseif ($data['wallet_type'] == 'cryptocurrency'){
            //币币提现
            if ($type != 'edit') {
                $data->validate([
                    'wallet_address'   => 'unique:user_withdrawal_address,wallet_address',
                ], [
                    'wallet_address.unique'     => '该钱包地址已存在',
                ]);
            }

            $data->validate([
                'currency'         => 'required',
            ], [
                'wallet_address.required'   => '请输入钱包地址',
                'currency.required'         => '请选择币种',
            ]);
            $model->user_id = $user->user_id;
            $model->wallet_type = 'cryptocurrency';
            $model->wallet_address = $data['wallet_address'];
            $model->currency = $data['currency'];
            //保存
            if ($model->save()){
                return true;
            }else{
                throw new \Exception('添加提现地址失败');
            }
        }else{
            throw new \Exception('类型错误');
        }


    }





}
