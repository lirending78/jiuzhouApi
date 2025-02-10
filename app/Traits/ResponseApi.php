<?php
/**
 * Created 返回响应工具类.
 * User : Long
 * Date : 2022/2/16
 * Time : 9:13 上午
 **/

namespace App\Traits;


use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

trait ResponseApi
{
    /**
     * @param string $msg
     * @param mixed $data
     * @param mixed $content
     * @param int $httpCode
     * @return JsonResponse
     */
    public function success(
        mixed $data = [],
        mixed $content = [],
        string $msg = 'success',
        int $httpCode = 200
    ): JsonResponse {
        return response()->json([
            'code' => 0,
            'message' => $msg,
            'data' => $data ?: [],
        ], $httpCode);
    }


    /**
     * @param string $msgCode
     * @param array|null $data
     * @param int $code
     * @param int $httpCode
     * @return JsonResponse
     */
    public function error(
        string $msgCode = '80001',
        array|null $data = [],
        int $code = 1,
        int $httpCode = 200
    ): JsonResponse {
        $msg = trans('codes.' . $msgCode);
        $msg = $msg === 'codes.' . $msgCode ? trans('codes.80001') : $msg;
        if ($msgCode == 402) {
            $code = 402;
        }
        return response()->json(
            [
                'code' => $code,
                'message' => $msg,
                'data' => is_null($data) ? [] : ($data ?: (object)[])
            ], $httpCode
        );
    }

    /**
     * @param \Throwable $e
     * @param Request $request
     * @param array|null $data
     * @param int $code
     * @param int $httpCode
     * @return JsonResponse
     */
    public function errorLog(
        \Throwable $e,
        Request $request,
        array|null $data = [],
        int $code = 1,
        int $httpCode = 200,
    ): JsonResponse {
        $log_msg = sprintf("path: 【%s】, 异常错误信息：%s, 行数：%d, 文件：%s", $request->path(), $e->getMessage(), $e->getLine(),
            $e->getFile());
        Log::channel('error')->error($log_msg, ['params' => $request->all(), 'uri' => $request->url()]);
        $msgCode = $e->getCode();
        $msg = trans('codes.' . $msgCode);
        $msg = $msg === 'codes.' . $msgCode ? trans('codes.80001') : $msg;
        if ($msgCode == 402) {
            $code = 402;
        }

        return response()->json(
            [
                'code' => $code,
                'message' => $msg,
                'data' => is_null($data) ? [] : ($data ?: (object)[])
            ], $httpCode
        );
    }

    public function fail($data = [], $message = 'error', $msgCode = 1, $httpCode = 200): JsonResponse
    {
        return response()->json([
            'code' => $msgCode,
            'message' => $message,
            'data' => $data ?: (object)[]
        ], $httpCode);

    }

    /**
     * @param $token
     * @return JsonResponse
     */
    public function respondWithToken($token): JsonResponse
    {
        return response()->json([
            'code' => 0,
            'access_token' => $token,
            'token_type' => 'bearer',
//            'expires_in' => auth('admin')->factory()
        ]);
    }
}
