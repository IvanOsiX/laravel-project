@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto bg-white rounded-lg shadow p-8">
        <h2 class="text-2xl font-bold mb-6">Новая статья</h2>

        @if ($errors->any())
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <ul class="list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('articles.store') }}" method="POST" class="space-y-4">
            @csrf
            @include('articles._form')
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded">
                Сохранить
            </button>
        </form>
    </div>
@endsection