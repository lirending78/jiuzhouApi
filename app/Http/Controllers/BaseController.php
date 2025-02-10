<?php

namespace App\Http\Controllers;

use App\Traits\LogTrait;
use App\Traits\ResponseApi;
use App\Utils\TimeUtil;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as Controller;

class BaseController extends Controller
{
    use AuthorizesRequests,ValidatesRequests, ResponseApi, LogTrait;

    protected TimeUtil $timer;

    function __construct()
    {
        $this->timer = new TimeUtil();
    }

    function __destruct()
    {
        // 判断是否为测试请求
        // 使用 Request::capture() 确保获得请求实例

        if (getenv('APP_ENV')=='testing') {
            return;
        }
        $this->timer->logTotalTime(request()->path());
    }
    /**
     * @author fable
     * @param \Exception|null $exception
     * @param FormRequest|Request $request
     * @return array
     */
    public function logBody(\Exception|null $exception, FormRequest|Request $request): array
    {
        if (isset($exception)) {
            if ($exception instanceof \Exception) {
                $msg = sprintf("path: 异常错误信息：%s, 行数：%d, 文件：%s", $exception->getMessage(), $exception->getLine(), $exception->getFile());
                $body = json_decode($msg, true);
                $body = isset($body) ? (array) $body : (array) $msg;
            } else {
                $body = (array) $exception;
            }
        }

        return array_merge(
            $body ?? [],
            $request->all(),
            [
//                'platform' => $request->headers->get('Platform'),
//                'device_uuid' => $request->headers->get('Device-Uuid'),
//                'access_token' => $request->headers->get('Access-Token'),
                'ip' => getip()
            ]
        );
    }
}
