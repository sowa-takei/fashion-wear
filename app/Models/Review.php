<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(USer::class);
    }

    public function item()
    {
        return $this->belongsTo(Item::class);
    }
    
    protected $fillable = [
        'comment',
        'user_id',
        'item_id',
        
    ];}
