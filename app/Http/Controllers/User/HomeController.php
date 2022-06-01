<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\User;
use App\Models\Brand;
use App\Models\like;

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
        return view('home.index',compact('items'));
    }

    public function serch(Request $request)
    {
        $keyword_name = $request->name;
        if(!empty($keyword_name))
        {
            $query = Item::query();
            $items = $query->where('name','like', '%' .$keyword_name. '%')->get();
            return view('home.index',compact('request'))->with([
                'items' => $items
            ]);
        }
    }
 
    public function show($id)
    {
        $items = Item::find($id);
        return view('home.show', compact('items'));
    }

    public function brand()
    {
        $brands = Brand::get();
        return view('home.brand',compact('brands'));
    }

    public function brand_show($id,Request $request)
    {
        $brands = Brand::find($id);
        $keyword_name = $request->name;
        $query = Item::query();
        $items = $query->where('name','like', '%' .$keyword_name. '%')->get();
        return view('home.brand_show',compact('brands','items','request'))->with([
            'items' => $items
        ]);
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
