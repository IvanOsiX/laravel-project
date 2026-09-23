<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

// Главная страница
Route::get('/', [MainController::class, 'index'])->name('home');

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты"
Route::get('/contacts', function () {
    $contacts = [
        'email' => 'student@example.com',
        'phone' => '+7 (999) 123-45-67',
        'address' => 'г. Москва, ул. Пушкина, д. 10',
        'telegram' => '@my_course_project'
    ];
    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');

Route::get('/gallery/{image}', [MainController::class, 'gallery'])->name('gallery');