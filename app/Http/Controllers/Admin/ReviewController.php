<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index', [
            'reviews' => Review::query()->orderBy('sort_order')->paginate(20),
        ]);
    }

    public function create()
    {
        return view('admin.reviews.create');
    }

    public function store(Request $request)
    {
        Review::query()->create($this->validatedPayload($request));

        return redirect()
            ->route('admin.reviews.index')
            ->with('status', 'Отзыв добавлен.');
    }

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', ['review' => $review]);
    }

    public function update(Request $request, Review $review)
    {
        $review->update($this->validatedPayload($request));

        return redirect()
            ->route('admin.reviews.index')
            ->with('status', 'Отзыв обновлен.');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return redirect()
            ->route('admin.reviews.index')
            ->with('status', 'Отзыв удален.');
    }

    private function validatedPayload(Request $request): array
    {
        return $request->validate([
            'author' => ['required', 'string', 'max:120'],
            'position' => ['nullable', 'string', 'max:120'],
            'rating' => ['required', 'integer', 'min:1', 'max:5'],
            'text' => ['required', 'string', 'max:2000'],
            'sort_order' => ['required', 'integer', 'min:0'],
        ]);
    }
}

