<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    // protected $fillable = ['img', 'nama', 'review', 'status'];
    protected $guarded = ['id'];
}
