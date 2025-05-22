<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'name',
        'price',
        'latitude',
        'longitude',
        'street',
        'city',
        'category',
        'type',
        'rating',
        'rating_count',
        'photo_url',
    ];
}
