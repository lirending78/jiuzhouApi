<?php

namespace App\Http\Services\Common;

use App\Http\Services\BaseService;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class PicService extends BaseService
{
    public function CreatedPicUseString($str)
    {

        return QrCode::size(50) // 设置二维码大小
        ->generate($str); // 生成二维码

    }


}
