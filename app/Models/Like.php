<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function items()
    {
        return $this->belongsTo(Item::class);
    }
         
    //いいねが既にされているかを確認

    protected $fillable = ['item_id','user_id'];
}
