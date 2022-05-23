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

// });

Route::group(['prefix' => 'admin'], function() {
    // ログイン画面
    Route::get('login', [App\Http\Controllers\Admin\LoginController::class, 'showLoginForm'])->name('admin.login');
    // ログイン処理
    Route::post('login', [App\Http\Controllers\Admin\LoginController::class, 'login'])->name('login.login');
});

Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home');
});
    
