<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Models\User;
use App\Models\Review;

class itemController extends Controller
{
    public function review(Request $request)
    {    
        // DBに登録する処理
        $review = new review;
        $review->comment = $request->comment;
        $review->item_id = $request->item_id;
        $review->user_id = auth()->user()->id;
        $review->save();
       
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $review = Review::find($id);
        $review->delete();
        return redirect()->route('user.index');
    }

    /**
     * 引数のIDに紐づくリプライにUNLIKEする
     *
     * @param $id リプライID
     * @return \Illuminate\Http\RedirectResponse
     */
    
}
