<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Gate;


class ArticleController extends Controller
{
    public function index () : View
    {
        return view("blog/articles.index" , [
            "articles" => Article::with('user')->latest()->get()
        ]);
    }




    // public function create ()
    // {

    // }



    public function store (Request $request)
    {

        $validated = $request->validate([
            "title" => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $request->user()->articles()->create($validated);
        return redirect(route('dashboard'));

    }



    public function show (Article $article) : View
    {
        return view('blog/articles/article', [
            "article" => $article
        ]);
    }


    // public function edit()
    // {

    // }


    // public function update()
    // {

    // }


    public function destroy(Article $article) : RedirectResponse
    {
        Gate::authorize("delete", $article);

        $article->delete();
        return redirect(route("articles.index"));
    }



}
