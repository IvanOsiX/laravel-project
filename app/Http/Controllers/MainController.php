<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    // Метод для главной страницы
    public function index()
    {        
        $jsonPath = public_path('articles.json');
                
        $jsonContent = file_get_contents($jsonPath);
                
        $articles = json_decode($jsonContent, true);
        
        return view('home', compact('articles'));
    }

    
    public function gallery($image)
    {
        return view('gallery', compact('image'));
    }
}