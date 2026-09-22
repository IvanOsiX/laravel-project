@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-8">
        <h2 class="text-3xl font-bold mb-4">Контакты</h2>
        <p class="text-gray-600 mb-6">Свяжитесь с нами любым удобным способом:</p>
        
        <!-- Динамический вывод данных из массива -->
        <ul class="space-y-4">
            @foreach($contacts as $key => $value)
                <li class="flex items-center border-b pb-2">
                    <span class="font-semibold w-32 capitalize">{{ $key }}:</span>
                    <span class="text-gray-700">{{ $value }}</span>
                </li>
            @endforeach
        </ul>
    </div>
@endsection