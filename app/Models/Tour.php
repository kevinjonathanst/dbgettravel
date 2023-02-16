<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Tour extends Model
{
    use HasFactory;

    protected $table = 'tours';

    protected $fillbable =[
        'destination',
        'nameoftravel',
        'email',
        'phone',
        'picname'
    ];
}
