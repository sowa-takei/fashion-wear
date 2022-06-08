<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'name_kana' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'last_name_kana' => ['regex:/^[ア-ン゛゜ァ-ォャ-ョー]+$/u', 'string', 'max:255'],
            'postal_code' => ['required', 'string', 'max:7', 'min:7'],
            'address' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'name_kana' =>$data['name_kana'],
            'last_name' =>$data['last_name'],
            'last_name_kana' =>$data['last_name_kana'],
            'postal_code' =>$data['postal_code'],
            'address' =>$data['address'],
            'telephone_number' =>$data['telephone_number'],
            'gender' =>$data['gender'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            
        ]);
    }
}
