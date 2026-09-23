@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold">Управление статьями</h2>
            <a href="{{ route('articles.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                + Добавить
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <table class="w-full text-left border-collapse">
            <thead>
                <tr class="border-b">
                    <th class="py-2">Дата</th>
                    <th class="py-2">Название</th>
                    <th class="py-2 text-right">Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach($articles as $article)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-2">{{ $article->date }}</td>
                        <td class="py-2">{{ $article->name }}</td>
                        <td class="py-2 text-right space-x-2">
                            <a href="{{ route('articles.show', $article) }}" class="text-blue-600 hover:underline">Смотреть</a>
                            <a href="{{ route('articles.edit', $article) }}" class="text-yellow-600 hover:underline">Ред.</a>
                            <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline" onsubmit="return confirm('Удалить статью?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Удалить</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="mt-4">{{ $articles->links() }}</div>
    </div>
@endsection