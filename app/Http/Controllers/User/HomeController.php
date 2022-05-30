<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\User;

class HomeController extends Controller
{
    public function top()
    {
        $items = DB::table('items')->orderBy('id', 'desc')->take(4)->get();
        
        return view('home.top',compact('items'));
    }
    public function home()
    {
        $items = Item::get();
        
        return view('home',compact('items'));
    }

    public function index()
    {
        $items = Item::get();
        return view('home.index');
    }

    public function edit($id)
    { 
        $user = User::find($id);
        return view('home.edit',compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->update($request->only(['name','name_kana', 'last_name', 'last_name_kana', 'postal_code', 'address', 'gender', 'telephone_number', 'emmail']));
        return redirect()->route('home');
    }

    
}
