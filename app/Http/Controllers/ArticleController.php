<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::with('category')->get();
        return view('article.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        return view('article.show', ['article' => $article]);
    }
}
