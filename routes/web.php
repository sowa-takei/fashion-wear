<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Item\itemController;
use App\Http\Controllers\Admin;
use App\Http\Controllers\Item;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home/top');
});

Auth::routes();

//新規作成後マイページ
Route::get('home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('edit',function () {
    return view('home.edit');
})->name('profile');

Route::post('update',[App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::group(['prefix' => 'admin'], function() {
    // ログイン画面
    Route::get('showLoginForm', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    // ログイン処理
    Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login.login');
    Route::get('logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.login.logout');
    Route::get('admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('login.index'); 
    Route::get('show{id}', [App\Http\Controllers\Admin\HomeController::class, 'show'])->name('item.show'); 
       
});

Route::get('item', [App\Http\Controllers\item\itemController::class, 'create'])->name('item.create');
Route::post('store', [App\Http\Controllers\item\itemController::class, 'store'])->name('item.store');    
