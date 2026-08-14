<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TrainingOutlineItem extends Model
{
    protected $guarded = ['id'];



    public function training()
    {
        return $this->belongsTo(
            Training::class,
            'training_id'
        );
    }
}
