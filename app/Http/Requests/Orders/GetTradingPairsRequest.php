<?php

namespace App\Http\Requests\Orders;

use App\Http\Requests\BaseRequest;

class GetTradingPairsRequest extends BaseRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules(): array
    {
        return match ($this->route()->getName()) {
//            'get_trading_pairs' => [
//                'page' => 'nullable|integer|min:1',
//                'page_size' => 'nullable|integer|min:1|max:100',
//            ],
            default => [],
        };
    }
}
