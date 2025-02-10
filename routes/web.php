<?php


use App\Models\Agent\AgentAdminUsers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// routes/web.php
Route::get('/autologin/{user}', function (AgentAdminUsers $user) {
    Auth::guard('agent-admin')->login($user);
    return redirect('/agent-admin');
})->name('autologin');
