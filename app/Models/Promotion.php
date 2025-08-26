<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    protected $fillable = [
        'title',
        'description',
        'discountstart',
        'discountend',
        'start_date',
        'end_date',
        'image',
    ];
}
