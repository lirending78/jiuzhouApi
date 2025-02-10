<?php

namespace App\Http\Services\Common;


use App\Http\Services\BaseService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;


class UploadService extends BaseService
{

    private string $bucketUrl;

    public function __construct()
    {
        $this->bucketUrl = getenv('APP_URL');
    }

    public function uploadToOSS($object, $filePath): ?string
    {
        $disk = Storage::disk('oss');
        $result = $disk->put($object, file_get_contents($filePath));
        if ($result) {
            // 返回生成的文件 URL
            return $disk->url($object);
        }

        return null;
    }


    /**
     * 上传图片
     * @param $file
     * @param $type
     * @return string
     */
    public function imageUpload($file, $type): string
    {
        $way = $this->getPath($type);
        $object = $way . date('Y-m-d');
        $result = Storage::disk('oss')->putFile($object, $file->path());
        return $this->bucketUrl . '/' . $result;

    }

    public function getPath($type): string
    {
        $path = '';
        switch ($type) {
            case 1://售后文件上传
                $path = '/refund/';
                break;

            case 2://售后文件上传
                $path = '/refund/';
                break;
        }

        return $path;
    }

    // 上传单文件
    function uploadFile($object, $file_path, $name): string
    {
        $result = Storage::disk('admin')->putFileAs($object, $file_path, $name);
        if (!$result) {
            throw new \Exception('文件上传失败');
        }

        // 使用 Storage::url() 生成正确的URL
        return $result;

        // 或者直接拼接URL
        // return $this->bucketUrl . '/storage/' . $result;
    }

    // 删除文件
    function deleteFile($url): string
    {
        if (str_contains($url, $this->bucketUrl)) {
            $url = ltrim($url, $this->bucketUrl);
        }
        return Storage::disk('oss')->delete($url);
    }

    /*上传文件*/

    public function multiUpload($request)
    {

        $files = $request->file();
        Log::channel('order')->info('文件上传',$files);
        if($request->mode == !1){
            $files = $files['file'];
        }
        $way = $this->getPath(1);
        $object = $way . date('Y-m-d');
        if (is_array($files)) {
            $i = 0;
            foreach ($files as $file) {
                $path[$i] = $this->bucketUrl . '/' .Storage::disk('oss')->putFile($object,
                    $file->path());
                $i++;
            }

        }
        return ['list' => $path];

    }
    // 删除已上传的图片
    public function deleteUploadedFile($object)
    {
        try {
            Storage::disk('oss')->delete($object);
        } catch (\Exception $e) {
            Log::error('Failed to delete uploaded image: ' . $e->getMessage());
        }
    }
}
