<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\User;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::get();
        
        return view('home',compact('items'));
    }

    public function update(Request $request)
    {
        

        $update = new Update();
        $update->name = $request->name;
        $update->last_name = $request->last_name;
        $update->name_kana = $request->name_kana;
        $update->last_name_kana = $request->last_name_kana;
        $update->postal_code = $request->postal_code;
        $update->address = $request->address;
        $update->telephone_number = $request->telephone_number;
        $update->gender = $request->gender;
        $update->email = $request->email;
        $update->save();
        return redirect('edit');
        

    }
}
