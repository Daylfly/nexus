<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->paginate(10);
        return view('articles.index', compact('articles'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title'             => 'required|max:255',
            'short_description' => 'required',
            'content'           => 'required',
            'banner_image'      => 'nullable|image|max:5120',
            'images'            => 'nullable|array|max:4',
            'images.*'          => 'nullable|image|max:5120',
            'tags'              => 'nullable|string',
        ]);

        $validated['banner_image'] = null;
        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')
                ->store('articles/banners', 'public');
        }

        $validated['image_one']   = null;
        $validated['image_two']   = null;
        $validated['image_three'] = null;
        $validated['image_four']  = null;

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $cols = ['image_one', 'image_two', 'image_three', 'image_four'];
            for ($i = 0; $i < min(count($images), 4); $i++) {
                $validated[$cols[$i]] = $images[$i]->store('articles/images', 'public');
            }
        }

        $validated['tags'] = $request->input('tags');

        Article::create($validated);

        return redirect()->route('articles.index')
            ->with('success', 'Статья успешно создана!');
    }

    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }


    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $validated = $request->validate([
            'title'             => 'required|max:255',
            'short_description' => 'required',
            'content'           => 'required',
            'banner_image'      => 'nullable|image|max:5120',
            'images'            => 'nullable|array|max:4',
            'images.*'          => 'nullable|image|max:5120',
            'tags'              => 'nullable|string',
        ]);

        if ($request->hasFile('banner_image')) {
            $validated['banner_image'] = $request->file('banner_image')
                ->store('articles/banners', 'public');
        }

        if ($request->hasFile('images')) {
            $images = $request->file('images');
            $cols = ['image_one', 'image_two', 'image_three', 'image_four'];
            for ($i = 0; $i < min(count($images), 4); $i++) {
                $validated[$cols[$i]] = $images[$i]->store('articles/images', 'public');
            }
        }

        $validated['tags'] = $request->input('tags');

        $article->update($validated);

        return redirect()->route('articles.index')
            ->with('success', 'Статья обновлена!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')
            ->with('success', 'Статья удалена!');
    }
}
