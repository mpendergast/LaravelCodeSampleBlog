<?php

namespace App\Http\Controllers;

use App\User;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index($id)
    {
        $author = User::find($id);
        $articles = $author->articles()->get();

        return view('author-articles', ['author' => $author, 'articles' => $articles]);
    }
}
