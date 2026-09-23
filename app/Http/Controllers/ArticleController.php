<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    // Список всех статей (админка)
    public function index()
    {
        $articles = Article::paginate(10);
        return view('articles.index', compact('articles'));
    }

    // Форма создания
    public function create()
    {
        return view('articles.create');
    }

    // Сохранение новой статьи
    public function store(Request $request)
    {
        $validated = $this->validateArticle($request);
        Article::create($validated);
        return redirect()->route('articles.index')->with('success', 'Статья создана');
    }

    // Просмотр одной статьи
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    // Форма редактирования
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    // Обновление статьи
    public function update(Request $request, Article $article)
    {
        $validated = $this->validateArticle($request);
        $article->update($validated);
        return redirect()->route('articles.index')->with('success', 'Статья обновлена');
    }

    // Удаление
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('articles.index')->with('success', 'Статья удалена');
    }

    // Общие правила валидации для store и update
    private function validateArticle(Request $request): array
    {
        return $request->validate([
            'date' => 'required|date_format:d.m.Y',
            'name' => 'required|string|min:3|max:255',
            'preview_image' => 'required|string',
            'full_image' => 'required|string',
            'shortDesc' => 'nullable|string|max:255',
            'desc' => 'required|string|min:10',
        ]);
    }
}