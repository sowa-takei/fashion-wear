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

    public function store (Request $request)
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
                return redirect()->route('login.index')->with([
                    
                ]);
            }
        }
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

    public function update(Request $request, $id)
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
