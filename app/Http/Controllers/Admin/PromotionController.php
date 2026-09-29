<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    public function index()
    {
        return view('admin.promotions.index', [
            'promotions' => Promotion::query()->orderBy('sort_order')->get(),
        ]);
    }

    public function update(Request $request, Promotion $promotion)
    {
        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1500'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);

        $promotion->update($validated);

        return redirect()->route('admin.promotions.index')->with('status', 'Акция обновлена.');
    }
}
