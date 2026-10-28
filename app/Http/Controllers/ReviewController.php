<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Сохранить новый отзыв
     */
    public function store(Request $request)
    {
        // Валидация
        $validated = $request->validate([
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required|string|min:10|max:1000',
        ]);

        // Создаём отзыв, привязанный к текущему пользователю
        Review::create([
            'user_id' => auth()->id(),
            'rating' => $validated['rating'],
            'review_text' => $validated['review_text'],
        ]);

        return response()->json(['message' => 'Отзыв добавлен'], 200);
    }
}