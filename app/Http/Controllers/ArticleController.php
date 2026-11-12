<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();

        return view('articles.index', [
            'articles' => $articles
        ]);
    }

    public function show(Article $article)
    {
        return view('articles.show', [
            'article' => $article
        ]);
    }

    public function api()
    {
        $articles = Article::with('category')->orderByDesc('published_at')->get();

        return response()->json($articles);
    }
}