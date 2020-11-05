<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class youtuber extends Model
{
    use HasFactory;
    protected $fillable=[
        'yt_name',
        'c_id',
        'year',
        'education',
        'country'
    ];
}
