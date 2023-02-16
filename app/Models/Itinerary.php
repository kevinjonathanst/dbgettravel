<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;
    protected $table = 'itinerarytour';

    protected $fillbable =[
        'tour_id',
        'day',
        'location',
        'description',
        'meals',
    ];
}
