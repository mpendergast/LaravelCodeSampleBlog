<?php

namespace App\Http\Controllers;

use Auth;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id)
    {
        $article = Article::find($id);

        return view('article-display', ['article' => $article]);
    }

    public function showCreateArticleForm(Request $request)
    {
        if (!Auth::user()->isAuthor) {
            return redirect('home')->withErrors(['You are not an author on this site.']);
        }

        return view('article-create');
    }

    public function create(Request $request)
    {
        if (!Auth::user()->isAuthor) {
            return redirect('home')->withErrors(['You are not an author on this site.']);
        }

        $this->validate($request, [
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $newArticle = Auth::user()->articles()->create($request->all());

        return redirect()->route('article', ['id' => $newArticle->id])->withSuccess('Your article has been posted');
    }
}
