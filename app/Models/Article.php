<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title',
        'short_description',
        'content',
        'banner_image',
        'image_one',
        'image_two',
        'image_three',
        'image_four',
        'tags',
    ];
}
