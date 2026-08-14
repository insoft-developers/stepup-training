<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Training extends Model
{
    protected $guarded = ['id'];


    protected $casts = [
        'start_at' => 'date',
        'finish_at' => 'date',
    ];


    public function clients()
    {
        return $this->belongsToMany(
            Client::class,
            'training_clients',
            'training_id',
            'client_id'
        );
    }

    public function benefits()
    {
        return $this->hasMany(
            TrainingBenefit::class,
            'training_id'
        );
    }

    public function reasons()
    {
        return $this->hasMany(
            TrainingReason::class,
            'training_id'
        );
    }

    public function courseItems()
    {
        return $this->hasMany(
            TrainingCourseItem::class,
            'training_id'
        );
    }


    public function outlineItems()
    {
        return $this->hasMany(
            TrainingOutlineItem::class,
            'training_id'
        );
    }


    public function audiences()
    {
        return $this->hasMany(
            TrainingAudience::class,
            'training_id'
        );
    }


    public function priceDetails()
    {
        return $this->hasMany(
            TrainingPriceDetail::class,
            'training_id'
        );
    }


    public function facilities()
    {
        return $this->belongsToMany(
            Facility::class,
            'training_facility_details',
            'training_id',
            'facility_id'
        );
    }


    public function testimonies()
    {
        return $this->belongsToMany(
            Testimony::class,
            'training_testimonies',
            'training_id',
            'testimony_id'
        );
    }
}
