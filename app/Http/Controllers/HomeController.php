<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use App\Models\Advantage;
use App\Models\ContactInfo;
use App\Models\ProductCard;
use App\Models\Promotion;
use App\Models\Review;

class HomeController extends Controller
{
    public function __invoke()
    {
        return view('home', [
            'about' => AboutSection::query()->first(),
            'promotions' => Promotion::query()->orderBy('sort_order')->get(),
            'productCards' => ProductCard::query()->orderBy('sort_order')->limit(6)->get(),
            'advantages' => Advantage::query()->orderBy('sort_order')->get(),
            'contacts' => ContactInfo::query()->orderBy('sort_order')->get(),
            'reviews' => Review::query()->orderBy('sort_order')->get(),
        ]);
    }
}
