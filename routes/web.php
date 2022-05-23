<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;

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

// プロフィール編集
Route::get('edit',[App\Http\Controllers\HomeController::class. 'edit'])->name('edit');

Route::group(['prefix' => 'admin'], function() {
    // ログイン画面
    Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    // ログイン処理
    Route::post('loginLogin', [App\Http\Controllers\Admin\LoginController::class, 'loginLogin'])->name('loginLogin');
    // その後の遷移(ログイン後)
    Route::get('adminHome', [App\Http\Controllers\Admin\HomeController::class, 'adminHome'])->name('adminHome');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    
});
    
