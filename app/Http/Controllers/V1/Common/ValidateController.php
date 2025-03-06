<?php

namespace App\Http\Controllers\V1\Common;

use App\Http\Controllers\BaseController;
use Illuminate\Support\Facades\Auth;


//校验类
class ValidateController extends  BaseController
{


    //校验资金密码是否正确
    public function validateFundPassword(string $fund_password): bool
    {
        $user = auth()->user();
        if(empty($fund_password)){
            throw new \Exception("资金密码不能为空");
        }
        if (!\Hash::check($fund_password, $user->pay_password)) {
            throw new \Exception("资金密码错误");
        }
        return true;
    }
    //判断银行卡格式是否正确
    public function validateCardNumber(string $card_number): bool
    {
        if(empty($card_number)){
            throw new \Exception("银行卡号不能为空");
        }
        if (!ctype_digit($card_number)) {
            throw new \Exception("银行卡号必须是数字");
        }

        if (strlen($card_number) < 12 || strlen($card_number) > 19) {
            throw new \Exception("银行卡号长度应为12到19位");
        }
        $cardNumber = preg_replace('/\D/', '', $card_number);
        $sum = 0;
        $numDigits = strlen($cardNumber);
        $parity = $numDigits % 2;

        for ($i = 0; $i < $numDigits; $i++) {
            $digit = (int) $cardNumber[$i];
            if ($i % 2 === $parity) {
                $digit *= 2;
                if ($digit > 9) {
                    $digit -= 9;
                }
            }
            $sum += $digit;
        }

        return ($sum % 10) === 0;
    }





}
