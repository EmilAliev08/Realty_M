<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Throwable;

class EmailVerificationNotificationController extends Controller
{
    
    public function store(Request $request): RedirectResponse
{
    if ($request->user()->hasVerifiedEmail()) {
        return redirect()->route('home');
    }

    try {
        $request->user()->sendEmailVerificationNotification();

        return back()->with('status', 'verification-link-sent');
    } catch (Throwable $exception) {
        report($exception);

        return back()->with('status', 'verification-link-failed');
    }
}
}
