<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\ItemRequest;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
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
    
    public function create (Request $request)
    {
        return view('item.create'); 
    }
    public function store (ItemRequest $request)
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
                Item::create([
                    'image_id' => $path,
                    'name' => $request['name'],
                    'introduction' => $request['introduction'],
                    'price' => $request['price'],
                    
                ]);
            }
        }
        return redirect()->route('login.index');
        
    }

    
    
}
