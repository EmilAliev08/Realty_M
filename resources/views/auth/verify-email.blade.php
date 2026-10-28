    <x-guest-layout>
        <h2 class="text-2xl font-bold text-center text-gray-900 mb-2">
            Подтверждение email
        </h2>
        <p class="text-center text-sm text-gray-600 mb-6">
            Спасибо за регистрацию! Проверьте почту и перейдите по ссылке для подтверждения.
        </p>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
                <p class="text-sm text-green-700">Новая ссылка отправлена на ваш email!</p>
            </div>
        @endif

        <div class="flex flex-col items-center gap-4">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full">
                @csrf
                <button type="submit" 
                        class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                        style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                    Отправить ссылку ещё раз
                </button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <button type="submit" 
                        class="w-full py-3 text-gray-700 font-semibold rounded-lg border border-gray-300 hover:bg-gray-50 transition-all">
                    Выйти
                </button>
            </form>
        </div>
    </x-guest-layout>