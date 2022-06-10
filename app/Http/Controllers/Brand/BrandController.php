<?php

namespace App\Http\Controllers\Brand;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\brand;
use App\Models\user;

class BrandController extends Controller
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

    
    public function index()
    {
        $brands = Brand::get();
        return view('brand.index',compact('brands'));
    }

    public function create (Request $request)
    {
        return view('brand.create'); 
    }

    public function store (BrandRequest $request)
    {
        // 画像フォームでリクエストした画像情報を取得
        $img = $request->file('image_id');
        // 画像情報がセットされていれば、保存処理を実行
        if (isset($img)) {
            // storage > public > img配下に画像が保存される
            $path = $img->store('img','public');
            // store処理が実行できたらDBに保存処理を実行
            if ($path) {
                // DBに登録する処理
                brand::create([
                    'image_id' => $path,
                    'name' => $request['name'],
                    'introduction' => $request['introduction'],
                ]);  
            }
        }
        return redirect()->route('brand.index');
    }

    public function show($id)
    {
        $brands = Brand::find($id);

        return view('brand.show', compact('brands'));
    }
    public function edit($id)
    {
        $brands = Brand::find($id);

        return view('brand.edit', compact('brands'));
    }

    public function update(BrandRequest $request, $id)
    {
        $brands = Brand::find($id);
        $brands->update($request->only(['name','introduction']));

        return redirect()->route('brand.index');
       
    }

    public function destroy($id)
    {
        $brands = Brand::find($id);
        $brands->delete();
        return redirect()->route('brand.index');
    }
    
}
