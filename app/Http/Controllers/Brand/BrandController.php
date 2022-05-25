<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\brand;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::get();
        return view('brand.index',compact('brands'));
    }

    public function create (Request $request)
    {
        return view('brand.create'); 
    }
}
