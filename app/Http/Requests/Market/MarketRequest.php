<?php
namespace App\Http\Requests\Market;

use App\Http\Requests\BaseRequest;

class MarketRequest extends BaseRequest
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
            'get-current-price' => [
                'symbol' =>'required|string',
            ],
            default => [],
        };
    }

    public function messages()
    {
        $messages = [
            'symbol.required' => '请输入币种名称',
        ];
        return $messages;
    }

    public function attributes()
    {
        $attributes = [
            'phone' => "手机号",
            'check_code' => '验证码',
        ];
        return $attributes;
    }



}
