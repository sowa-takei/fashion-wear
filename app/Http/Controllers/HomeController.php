<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home');
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
