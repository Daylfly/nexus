<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCard extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'sort_order',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
