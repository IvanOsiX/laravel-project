@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-8 text-center">
        <h2 class="text-3xl font-bold mb-6">Галерея</h2>
        
        <!-- Контейнер ограничивает ширину и высоту -->
        <div class="max-w-3xl mx-auto mb-8">
            <img src="{{ asset($image) }}" alt="Full Image" class="w-full h-auto max-h-[70vh] object-contain rounded-lg shadow-lg mx-auto">
        </div>
        
        <a href="{{ route('home') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded transition">
            Вернуться на главную
        </a>
    </div>
@endsection