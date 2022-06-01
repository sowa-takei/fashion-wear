<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\like;

class Item extends Model
{
    use HasFactory;
  
    //後でViewで使う、いいねされているかを判定するメソッド。
    
    protected $table = 'items';
    protected $fillable = [
        'name',
        'image_id',
        'introduction',
        'price',
        'user_id'
    ];

    
}
