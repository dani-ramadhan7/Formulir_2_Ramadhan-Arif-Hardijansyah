<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        return view('article', [
            "name" => "Ramadhan Arif H.",
            "email" => "05111940000162@mahasiswa.integra.its.ac.id",
            "articles" => Article::all()
        ]);
    }
}
