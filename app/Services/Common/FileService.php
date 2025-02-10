<?php

namespace App\Services\Common;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FileService
{
    /**
     * 上传文件
     *
     * @param UploadedFile $file
     * @param string $type
     * @return array
     */
    public function uploadFile(UploadedFile $file, string $type): array
    {
        // 生成唯一文件名
        $fileName = $this->generateFileName($file);
        
        // 根据类型确定存储路径
        $path = $this->getStoragePath($type);
        
        // 存储文件
        $filePath = $file->storeAs($path, $fileName, 'public');
        
        // 获取文件访问URL
        $url = $this->getFileUrl($filePath);
        
        return [
            'file_name' => $fileName,
            'file_path' => $filePath,
            'url' => $url,
            'size' => $file->getSize(),
            'mime_type' => $file->getMimeType(),
        ];
    }

    /**
     * 生成唯一文件名
     *
     * @param UploadedFile $file
     * @return string
     */
    protected function generateFileName(UploadedFile $file): string
    {
        return Str::uuid() . '.' . $file->getClientOriginalExtension();
    }

    /**
     * 根据类型获取存储路径
     *
     * @param string $type
     * @return string
     */
    protected function getStoragePath(string $type): string
    {
        $baseDir = 'uploads/' . date('Y/m/d');
        
        return match ($type) {
            'avatar' => $baseDir . '/avatars',
            'document' => $baseDir . '/documents',
            default => $baseDir . '/others',
        };
    }

    /**
     * 获取文件访问URL
     *
     * @param string $path
     * @return string
     */
    protected function getFileUrl(string $path): string
    {
        // 从配置文件获取域名
        $domain = config('app.url');
        
        return $domain . Storage::url($path);
    }
} 