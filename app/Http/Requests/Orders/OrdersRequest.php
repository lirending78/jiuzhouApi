<?php

namespace App\Http\Requests\Orders;

use App\Http\Requests\BaseRequest;

class OrdersRequest extends BaseRequest
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

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return match ($this->route()->getName()) {
            'get_trad_buy'=>[
                'currency'=>'required|string',
            ],

            default => [],
        };
    }

    public function messages()
    {
        $messages = [
            'currency.required'=>'交易对不能为空',
            'currency.string'=>'交易对类型错误'

        ];
        return $messages;
    }

    public function attributes()
    {
        $attributes = [
            'currency'=>'交易对'
        ];
        return $attributes;
    }


}
