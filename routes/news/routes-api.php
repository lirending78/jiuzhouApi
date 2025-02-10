<?php


use App\Http\Controllers\V1\User\NewsController;
use Illuminate\Support\Facades\Route;

//use Illuminate\Routing\Route;


Route::get('NewsList', [NewsController::class, 'NewsList'])->name('news_list');
