<?php

namespace App\Http\Controllers;

use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->get();
        
        return view('index', compact('reviews'));
    }
}