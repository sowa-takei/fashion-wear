<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class HomeController extends Controller
{
    public function top()
    {
        $items = Item::get();
        
        return view('home.top',compact('items'));
    }
    public function index()
    {
        $items = Item::get();
        
        return view('home',compact('items'));
    }
}
