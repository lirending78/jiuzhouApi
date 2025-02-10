<?php

namespace App\Http\Services;

use App\Http\Services\BaseService;
use App\Models\News;

class NewsService extends BaseService
{

    public function NewsList($request)
    {
        return News::query()->orderBy('order')->simplePaginate($request->per_page);
    }

}
