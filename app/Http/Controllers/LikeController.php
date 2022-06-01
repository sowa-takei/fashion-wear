<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class LikeController extends Controller
{
    public function like(Post $post, Request $request){
        $like=New Like();
        $like->item_id=$item->id;
        $like->user_id=Auth::user()->id;
        $like->save();
        return back();
    }

    public function unnice(Post $post, Request $request){
        $user=Auth::user()->id;
        $like=Like::where('like_id', $post->id)->where('user_id', $user)->first();
        $like->delete();
        return back();
    }
}
