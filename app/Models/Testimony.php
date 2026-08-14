<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected $guarded = ['id'];



    protected $casts = [
        'rating' => 'float',
    ];
}
