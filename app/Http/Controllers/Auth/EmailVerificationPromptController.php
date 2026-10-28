<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmailVerificationPromptController extends Controller
{
    
    /**
     * Экран подтверждения email.
     * 
     * Если email уже подтверждён — редиректит на dashboard (или куда пользователь хотел попасть).
     * Если не подтверждён — показывает страницу с просьбой подтвердить.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail()
                    ? redirect()->intended(route('dashboard', absolute: false))
                    : view('auth.verify-email');
    }
}
    