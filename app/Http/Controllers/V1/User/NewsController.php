<?php

namespace App\Http\Controllers\V1\User;

use App\Http\Controllers\BaseController;
use App\Http\Requests\News\NewsRequest as Request;
use App\Http\Services\NewsService;

class NewsController extends BaseController{
    public function NewsList(Request $request){
         try{
             $service = new NewsService();
             $response = $service->NewsList($request);
             return $this->success($response);
         }catch(\Exception $e){
             return $this->responseError($e->getMessage());
         }
    }




}
