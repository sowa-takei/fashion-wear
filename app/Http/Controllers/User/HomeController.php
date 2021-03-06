<?php

namespace App\Http\Controllers\User;
use App\Http\Requests\USerRequest;
use App\Http\Requests\ReviewRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Item;
use App\Models\User;
use App\Models\Brand;
use App\Models\like;
use App\Models\Review;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function top()
    {
        $brands = DB::table('brands')->orderBy('name','asc')->get();
        $items = DB::table('items')->orderBy('id', 'desc')->take(4)->get();
        
        return view('home.top',compact('items','brands'));
    }
    public function home()
    {
        $items = Item::get();
        
        return view('home',compact('items'));
    }

    public function index()
    {    
        $brands = DB::table('brands')->orderBy('name','asc')->get();
        $items = Item::paginate(15);
        return view('home.index',compact('items','brands'));
    }

    public function serch(Request $request)
    {
        $brands = DB::table('brands')->orderBy('name','asc')->get();
        $keyword_name = $request->name;
        if(!empty($keyword_name))
        {
            $query = Item::query();
            $items = $query->where('name','like', '%' .$keyword_name. '%')->paginate(15);
            return view('home.index',compact('request','brands'))->with([
                'items' => $items
            ]);
        }
    }
 
    public function show(Item $item, $id, Request $request, User $user)
    {
        $user = Auth::user()->id;
        $item = Item::find($id);
        $like = Like::where('item_id', $item->id)->where('user_id', auth()->user()->id)->first();
          
        $reviews = Review::get();
        return view('home.show', compact('item','like','reviews', 'user'));
    }

    public function brand()
    {
        $brands = DB::table('brands')->orderBy('name','asc')->get();
       
       
        
        // $brands = $brands->groupBy(function ($brand) 
        // {
        //     // ????????????????????????????????????
        //     $initials = mb_substr($brand->name, 0, 1);
        
        //     // ????????????????????????????????????
        //     if (ctype_alpha($initials)) {
        //         // ???????????????????????????????????????????????????????????????????????????
        //         return Str::upper($initials);
        //     }

        //     // ??????????????????0-9??????????????????
        //     if (is_numeric($initials)) {
        //         return '0-9';
        //     }

        //     return '?????????';
        // });
        
        // $brands = collect(range('A', 'Z'))->push('0-9')
        //                         ->push('?????????')
        //                         ->flip()
        //                         ->map(function () { return null; })
        //                         ->merge($brands);
        
        return view('home.brand',compact('brands'));
    }

    public function brand_show($id)
    {
        $brands = Brand::find($id);
        
        $items = item::where('name','like', '%' .$brands->name. '%')->get();
        return view('home.brand_show',compact('brands','items'));
    }

    public function edit($id)
    { 
        $user = User::find($id);

        return view('home.edit',compact('user'));
    }

    public function update(UserRequest $request, $id)
    {
        $user = User::find($id);
        
        $user->update($request->only(['name','name_kana', 'last_name', 'last_name_kana', 'postal_code', 'address', 'gender', 'telephone_number', 'emmail']));
        
        
        return redirect()->route('home');
    }

    
}
