<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request, string $id, string $hash): View
    {
        // Находим пользователя по ID
        $user = User::findOrFail($id);

        // Проверяем соответствие хеша email
        abort_unless(
            hash_equals(sha1($user->getEmailForVerification()), $hash),
            403
        );

        // Подтверждаем email, если он ещё не подтверждён
        if ($user->markEmailAsVerified()) {
            event(new Verified($user));
        }

        // Показываем страницу успешного подтверждения
        return view('auth.email-verified');
    }
}
