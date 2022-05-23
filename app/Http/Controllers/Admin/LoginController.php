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
    public function loginLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('adminHome')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }
        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
     }
    // public function login(Request $request)
    // {
    //     $this->validate($request, [
    //     'email' => 'email|required',
    //     'password' => 'required|min:4'
    //     ]);
    //     if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])) {
    //         return redirect()->route('admin.index');
    //     }
    //         return back()->withErrors([
    //         'login' => 'メールアドレスかパスワードが間違っています.',
    //         ]);
    // }

    protected function guard()
    {
        return Auth::guard('admin');  //変更
    }
    
}
