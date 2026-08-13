<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    protected $guarded = ['id'];


    protected $casts = [
        'start_at' => 'date',
        'finish_at' => 'date',
    ];
}
