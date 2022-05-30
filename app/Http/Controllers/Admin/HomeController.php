<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\brand;
use App\Models\user;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = Item::get();
        $brands = Brand::get();
        return view('admin.home',compact('items'));
    }

    public function show($id)
    {
        $items = Item::find($id);

        return view('item.show', compact('items'));
    }

    public function edit($id)
    {
        $items = Item::find($id);

        return view('item.edit', compact('items'));
    }

    public function update(Request $request, $id)
    {
        $items = Item::find($id);
        $items->update($request->only(['name','introduction','price']));

        return redirect()->route('login.index');
    }

    public function destroy($id)
    {
        $items = Item::find($id);
        $items->delete();
        return redirect()->route('login.index');
    }


    
    

}
