@extends('layouts.app')

@section('content')
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="text-3xl font-bold mb-2">{{ $article->name }}</h2>
        <p class="text-sm text-gray-500 mb-6">{{ $article->date }}</p>
        <img src="{{ asset($article->full_image) }}" class="w-full h-auto max-h-[60vh] object-contain rounded mb-6">
        <p class="text-gray-700 whitespace-pre-line">{{ $article->desc }}</p>
        <div class="mt-6 flex space-x-4">
            <a href="{{ route('articles.edit', $article) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white py-2 px-4 rounded">Редактировать</a>
            <a href="{{ route('articles.index') }}" class="text-gray-600 hover:underline py-2">← Назад</a>
        </div>
    </div>
@endsection