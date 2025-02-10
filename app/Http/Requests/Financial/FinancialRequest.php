<?php
namespace App\Http\Requests\Financial;

use App\Http\Requests\BaseRequest;

class FinancialRequest extends BaseRequest
{
    /**
     * Determine if the User is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }
    public function rules(): array
    {

        return match ($this->route()->getName()) {
//            'recharge' => [
//                'current' => [
//                    'required',
//                  ],
//                'num' => [
//                    'required',
//                ],
//                'recharge_credentials' => [
//                    'required'
//                ],
//            ],
            'get_recharge'=>[
                'uuid' => [
                    'required'
                ]
            ],
            'edit_recharge'=>[
                'recharge_type' => 'required',
                'num' => [
                    'required',
                ],
                'recharge_credentials' => [
                    'required'
                ],
                'uuid' => [
                    'required'
                ]
            ],
            'get_recharge_address'=>[
                'currency' => ['required'],
            ],

//            'change_wallet_withdrawal_address' => [
//                'code' => 'required',
//                'current' => 'required',
//                'withdrawal_address1' => 'required',
//            ],

//            'withdrawal'=>[
//                'currency' => ['required'],
//                'cash_amount' => ['required'],
//                'withdrawal_account' => ['required'],
//                'withdrawal_credentials' => ['required'],
//            ],

            default => [],
        };
    }

    public function messages()
    {
        $messages = [
            'current.required'=> '请选择类型',
            'num.required'=> '请输入充值数量',
            'recharge_credentials.required'=> '请输入充值凭证',
            'uuid.required'=> '请输入UUID',
            'cash_amount.required' => '请输入提现金额',
            'withdrawal_account.required' => '请输入提现账户',
            'withdrawal_credentials.required' => '请输入提现凭证',
            'code.required' => '请输入验证码',
            'withdrawal_address.required' => '请输入提现地址',
        ];
        return $messages;
    }

    public function attributes()
    {
        $attributes = [
            'current' => "币种",
            'num' => '数量',
            'withdrawal_address' => '提现地址',
        ];
        return $attributes;
    }



}
