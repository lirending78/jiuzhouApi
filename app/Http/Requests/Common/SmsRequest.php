<?php

namespace App\Http\Requests\Common;

use App\Http\Requests\BaseRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class SmsRequest extends BaseRequest
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
            'send-sms' => [
                'phone' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        $valid = is_valid_mobile_number($value);
                        if (!$valid) {
                            $fail('The ' . $attribute . ' is invalid.');
                        }
                    }
                ],
            ],
            'check_code', 'ali-check-code' => [
                'phone' => [
                    'required',
                    function ($attribute, $value, $fail) {
                        $valid = is_valid_mobile_number($value);
                        if (!$valid) {
                            $fail('The ' . $attribute . ' is invalid.');
                        }
                    }
                ],
                'code' => 'required|string'
            ],
            'get_message_code' => [
                'mobile' => [
//                    'required',
                    function ($attribute, $value, $fail) {
                        $valid = is_valid_mobile_number($value);
                        if (! $valid) {
                            $fail('The ' . $attribute . ' is invalid.');
                        }
                    }
                ],
                'message_type' => 'required|in:login,new_signup,signup,reset_password,realname_auth,forgot_password,get_current_msg_code,get_new_msg_code,bank_card',
                'email'=>'nullable|email',
            ],
            'get_email_code' => [
                'message_type' => 'required|in:login,new_signup,signup,reset_password,realname_auth,forgot_password,get_current_msg_code,get_new_msg_code,bank_card',
                'email'=>'required|email',
            ],
            'check_email_code' => [
                'message_type' => 'required|in:login,new_signup,signup,reset_password,realname_auth,forgot_password,get_current_msg_code,get_new_msg_code,bank_card',
                'email'=>'required|email',
                'code' => 'required|string'
            ],
            default => [
            ],
        };
    }

    public function messages()
    {
        $messages = [
        'mobile' => 'Please enter a mobile phone number',
        'mobile.required' => 'Please enter a mobile phone number'
        ];
        return $messages;
    }

    public function attributes()
    {
        $attributes = [
            'mobile' => "mobile",
            'phone' => "手机号",
            'check_code' => '验证码',
        ];
        return $attributes;
    }


}
