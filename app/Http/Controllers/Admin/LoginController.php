<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/admin/home';
    protected $namespace = 'App\Http\Controllers\Admin\LoginController';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
        
    }

    // adminログインページ
    public function showLoginForm()
    {
        return view('admin.login'); 
    }

    //adminログイン処理
    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('login.index')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }
        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
     }
     public function logout(Request $request)
     {
         Auth::logout();
         
 
         // ログアウトしたらログインフォームにリダイレクト
         return redirect()->route('home')->with([
             'logout_msg' => 'ログアウトしました',
         ]);
     }

    protected function guard()
    {
        return Auth::guard('admin');  //変更
    }
    
}
