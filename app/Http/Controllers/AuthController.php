<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    // Показываем страницу с формой
    public function create()
    {
        return view('auth.signin');
    }

    // Валидируем и возвращаем JSON
    public function registration(Request $request)
    {
        // Проверяем входящие данные
        $validated = $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email',
            'password' => 'required|string|min:6',
        ]);

        // Отдаем собранные данные в JSON
        return response()->json([
            'success' => true,
            'message' => 'Регистрация прошла успешно',
            'user' => $validated,
        ], 200, [], JSON_UNESCAPED_UNICODE);
    }
}