<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // 1. Проверяем данные из формы
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'nullable|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
            'agree' => 'required|accepted', // Чекбокс согласия
        ]);

        // 2. Сохраняем заявку в базу данных
        ContactRequest::create([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'email' => $validated['email'] ?? null,
            'subject' => $validated['subject'] ?? null,
            'message' => $validated['message'],
            'agreed_to_processing' => true,
        ]);

        // 3. Возвращаем пользователя назад с зелёным сообщением
        return back()->with('success', 'Заявка отправлена! Мы свяжемся с вами в ближайшее время.');
    }
}