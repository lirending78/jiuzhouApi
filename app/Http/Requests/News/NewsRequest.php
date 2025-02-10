<?php
namespace App\Http\Requests\News;

use App\Http\Requests\BaseRequest;

class NewsRequest extends BaseRequest
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
            'news_list' => [
                'per_page' => [
                    'required',
                ],
            ],
            default => [],
        };
    }

    public function messages()
    {
        $messages = [
            'per_page.required'=> 'per_page不能为空',
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
