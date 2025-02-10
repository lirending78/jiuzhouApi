<?php

namespace App\Http\Controllers\V1\Common;

use App\Http\Controllers\BaseController;
use App\Http\Requests\Common\UploadFileRequest;
use App\Http\Services\Common\UploadService;
use Exception;
use Illuminate\Http\JsonResponse;

class FileController extends BaseController
{

    public function upload(UploadFileRequest $request, UploadService $service): JsonResponse
    {
        try {
            $file = $request->file('file');
            $object =  '/images/'.date('Ymd');
            $name = time().random_int(1000, 9999).'.'.$file->extension();
            $url = $service->uploadFile($object, $request->file('file')->path(),$name);
            //完整路径
            $img_url = config('app.url').'/uploads/'.$url;

            // 添加调试日志
            \Log::info('File upload info:', [
                'original_path' => $file->path(),
                'stored_path' => $object,
                'url' => $url,
                'storage_path' => storage_path('app/public'),
                'public_path' => public_path('storage')
            ]);
            return $this->success(['img_url' => $img_url,'api_url' => $url]);
        } catch (Exception $e) {
            return $this->fail([], $e->getMessage());
        }
    }
}
