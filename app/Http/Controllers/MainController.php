<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class MainController extends Controller
{
    // Главная страница со списком новостей
    public function index()
    {
        $articles = Article::all();
        return view('home', compact('articles'));
    }

    // Страница галереи
    public function gallery($image)
    {
        return view('gallery', compact('image'));
    }
}