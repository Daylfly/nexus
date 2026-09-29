<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'author',
        'position',
        'rating',
        'text',
        'sort_order',
    ];
}
