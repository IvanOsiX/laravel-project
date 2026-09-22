<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Главная страница
Route::get('/', function () {
    return view('home');
})->name('home');

// Страница "О нас"
Route::get('/about', function () {
    return view('about');
})->name('about');

// Страница "Контакты" с передачей массива данных
Route::get('/contacts', function () {
    // Массив данных
    $contacts = [
        'email' => 'ivan@ivan.ru',
        'phone' => '+7(999)123-45-67',
        'address' => 'г. Москва, ул. Пушкина, д. 1'
    ];
    
    // Передача массива на страницу
    return view('contacts', ['contacts' => $contacts]);
})->name('contacts');
