<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = User::where('isAuthor', true)->get();

        $authorPreviews = [];

        foreach ($authors as $author) {
            $article = $author->articles()->orderBy('id', 'desc')->first();
            $authorPreviews[] = [
                'authorId' => $author->id,
                'authorName' => $author->name,
                'articleId' => $article->id,
                'articleTitle' => $article->title,
                'articleContent' => $article->preview(),
            ];
        }

        return view('home', ['authorPreviews' => $authorPreviews]);
    }
}
