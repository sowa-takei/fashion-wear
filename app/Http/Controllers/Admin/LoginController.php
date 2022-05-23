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

    public function showLoginForm()
    {
        return view('admin.login'); 
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['emial', 'password']);

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('admin.index')->with([
                'login_msg' => 'ログインしました。',
            ]);
        }
        return back()->withErrors([
            'login' => ['ログインに失敗しました'],
        ]);
    }

    protected function guard()
    {
        return Auth::guard('admin');  //変更
    }

    

    
    
    
}
