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
        $validated = $request->validate([
            'client_name' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
            'review_text' => 'required|string|max:1000',
        ]);

        Review::create($validated);

        return back()->with('success', 'Спасибо! Ваш отзыв опубликован.');
    }
}