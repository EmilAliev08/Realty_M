<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-2">
        Забыли пароль?
    </h2>
    <p class="text-center text-sm text-gray-600 mb-6">
        Укажите email, и мы отправим ссылку для сброса пароля
    </p>

    @if (session('status'))
        <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
            <p class="text-sm text-green-700">{{ session('status') }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email') }}" 
                   required autofocus
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white @error('email') border-red-500 @enderror"
                   placeholder="example@mail.ru">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Кнопка -->
        <div class="flex flex-col items-center gap-4 pt-2">
            <button type="submit" 
                    class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                    style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                Отправить ссылку
            </button>

            <a href="{{ route('login') }}" 
               class="text-sm text-gray-600 hover:text-[#3B7EFF] transition-colors">
                ← Вернуться ко входу
            </a>
        </div>
    </form>
</x-guest-layout>