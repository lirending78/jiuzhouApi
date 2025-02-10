<?php

namespace App\Http\Requests\Common;

use App\Http\Requests\BaseRequest;

class UploadFileRequest extends BaseRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'file' => [
                'required',
                'file',
                'max:10240', // 最大10MB
                'mimes:jpeg,png,jpg,gif,pdf,doc,docx,xls,xlsx', // 允许的文件类型
            ],
            'type' => [
                'required',
                'string',
                'in:avatar,document,other', // 文件用途类型
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'file.required' => '请选择要上传的文件',
            'file.file' => '无效的文件格式',
            'file.max' => '文件大小不能超过10MB',
            'file.mimes' => '不支持的文件类型',
            'type.required' => '请指定文件类型',
            'type.in' => '无效的文件类型',
        ];
    }
}
