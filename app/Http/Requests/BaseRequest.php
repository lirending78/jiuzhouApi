<?php

namespace App\Http\Requests;

use App\Traits\LogTrait;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class BaseRequest extends FormRequest
{
    use LogTrait;

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

        return [
            //
        ];
    }

    /**
     * @param Validator $validator
     * @throws  HttpResponseException
     */
    protected function failedValidation(Validator $validator)
    {
        $error = $validator->errors()->all();

        throw new HttpResponseException(
            response()->json(
                [
                    'code' => 1,
                    'message' => $error[0]
                ]
            )
        );
    }


    /**
     * 通用的分页参数验证逻辑
     */
    public function validatePagination(array $input = null): void
    {
        $input = $input ?? $this->all();

        $rules = [
            'page' => 'nullable|integer|min:1',
            'page_size' => 'nullable|integer|min:1|max:100',
        ];
        $messages = [
            'page.integer' => '页码必须是整数。',
            'page.min' => '页码必须是正整数。',
            'page_size.integer' => '每页数量必须是整数。',
            'page_size.min' => '每页数量必须大于 0。',
            'page_size.max' => '每页数量不能超过 100。',
        ];
        $validator = \Validator::make($input, $rules,$messages);

        if ($validator->fails()) {
            $errors = $validator->errors()->all();
            $message = $errors[0] ?? '分页参数无效或缺失。';
            throw new \InvalidArgumentException($message);
        }
    }
}
