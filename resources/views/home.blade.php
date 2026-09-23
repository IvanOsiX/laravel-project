@extends('layouts.app')

@section('content')
    <div class="bg-white rounded-lg shadow p-8">
        <h2 class="text-3xl font-bold mb-6 text-center">Новости</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="border rounded-lg overflow-hidden shadow-sm flex flex-col hover:shadow-md transition">
                                        
                    <!-- Картинка-превью в карточке -->
                    <a href="{{ route('gallery', ['image' => $article['full_image']]) }}">
                        <img src="{{ asset($article['preview_image']) }}" alt="{{ $article['name'] }}" class="w-full h-48 object-cover hover:opacity-80 transition">
                    </a>
                    
                    <div class="p-4 flex-grow flex flex-col">
                        <span class="text-sm text-gray-500">{{ $article['date'] }}</span>
                        <h3 class="text-xl font-semibold mt-1 mb-2">{{ $article['name'] }}</h3>
                        
                        @if(isset($article['shortDesc']))
                            <p class="text-gray-600 text-sm flex-grow">{{ $article['shortDesc'] }}</p>
                        @else                            
                            <p class="text-gray-600 text-sm flex-grow">{{ Str::limit($article['desc'], 100) }}</p>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection