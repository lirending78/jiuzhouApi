<?php
namespace App\Http\Services\News;

use App\Http\Services\BaseService;

class NewsService extends BaseService{

    //list
    public function list(){
        $news = $this->model->all();
        return $news;
    }


}
