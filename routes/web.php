<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Item\itemController;

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

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'top'])->name('top');
//新規作成後マイページ
Route::group(['middleware' => ['auth']], function() {
    Route::get('home', [App\Http\Controllers\User\HomeController::class, 'home'])->name('home');
    Route::get('index', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.index');
    Route::get('edit{id}', [App\Http\Controllers\User\HomeController::class, 'edit'])->name('user.edit');
    Route::get('show{id}', [App\Http\Controllers\User\HomeController::class, 'show'])->name('user.show');
    Route::post('update{id}',[App\Http\Controllers\User\HomeController::class, 'update'])->name('user.update');
    Route::get('brand',[App\Http\Controllers\User\HomeController::class, 'brand'])->name('user.brand');
    Route::get('brand_show{id}', [App\Http\Controllers\User\HomeController::class, 'brand_show'])->name('user.brand_show');
    Route::get('serch', [App\Http\Controllers\User\HomeController::class, 'serch'])->name('serch');
    Route::post('like', [App\Http\Controllers\USer\itemController::class, 'like'])->name('like');
});
Auth::routes();

Route::group(['prefix' => 'admin'], function() {
    // ログイン画面
    Route::get('showLoginForm', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    // ログイン処理
    Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('admin.login.login');
    Route::post('logout', [App\Http\Controllers\Admin\LoginController::class, 'logout'])->name('admin.login.logout');
    Route::get('admin', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('login.index'); 
    Route::get('show{id}', [App\Http\Controllers\Admin\HomeController::class, 'show'])->name('item.show');
    Route::get('edit{id}', [App\Http\Controllers\Admin\HomeController::class, 'edit'])->name('item.edit');
    Route::post('update{id}',[App\Http\Controllers\Admin\HomeController::class, 'update'])->name('item.update');
    Route::post('destroy{id}', [App\Http\Controllers\Admin\HomeController::class, 'destroy'])->name('item.destroy');   
    Route::get('item', [App\Http\Controllers\item\itemController::class, 'create'])->name('item.create');
    Route::post('store', [App\Http\Controllers\item\itemController::class, 'store'])->name('item.store');  
});


Route::group(['prefix' => 'brand'], function() {
    Route::get('index', [App\Http\Controllers\Brand\BrandController::class, 'index'])->name('brand.index');
    Route::get('create', [App\Http\Controllers\Brand\BrandController::class, 'create'])->name('brand.create');
    Route::post('store', [App\Http\Controllers\Brand\BrandController::class, 'store'])->name('brand.store');
    Route::get('show{id}',[App\Http\Controllers\Brand\BrandController::class, 'show'])->name('brand.show');
    Route::get('edit{id}', [App\Http\Controllers\Brand\BrandController::class, 'edit'])->name('brand.edit');
    Route::post('update{id}', [App\Http\Controllers\Brand\BrandController::class, 'update'])->name('brand.update');
    Route::post('destroy{id}', [App\Http\Controllers\Brand\BrandController::class, 'destroy'])->name('brand.destroy');
});

Route::get('like/{items}', [App\Http\Controllers\LikeController::class, 'like'])->name('like');
Route::get('unlike/{items}', [App\Http\Controllers\LikeController::class, 'unlike'])->name('unlike');
