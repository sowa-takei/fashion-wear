<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\like;

class Item extends Model
{
    use HasFactory;
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function reviews()
    {
        return $this->hasMany('App\Models\Review');
    }

    

    
    protected $table = 'items';
    protected $fillable = [
        'name',
        'image_id',
        'introduction',
        'price',
        'user_id'
    ];

    
}
