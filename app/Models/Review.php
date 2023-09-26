<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'nama', 'review', 'status']; 

    // public static function find()
    // {
    //     $all_review = static::all();
    //     $show = $all_review->where('status',true);
    //     return $show;
    // }
}
