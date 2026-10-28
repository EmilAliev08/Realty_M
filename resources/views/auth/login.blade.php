<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">
        Вход в аккаунт
    </h2>

    <!-- Статус сессии -->
    @if (session('status'))
        <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
            <p class="text-sm text-green-700">{{ session('status') }}</p>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="space-y-5">
        @csrf

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email') }}" 
                   required autofocus autocomplete="username"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white @error('email') border-red-500 @enderror"
                   placeholder="example@mail.ru">
            @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Пароль -->
        <div>
            <label for="password" class="block text-sm font-medium text-gray-700 mb-1">
                Пароль
            </label>
            <input id="password" type="password" name="password" 
                   required autocomplete="current-password"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white @error('password') border-red-500 @enderror"
                   placeholder="Введите пароль">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Запомнить меня -->
        <div class="flex items-center">
            <input id="remember_me" type="checkbox" name="remember" 
                   class="w-4 h-4 text-[#3B7EFF] border-gray-300 rounded focus:ring-[#3B7EFF]/20">
            <label for="remember_me" class="ml-2 text-sm text-gray-600">
                Запомнить меня
            </label>
        </div>

        <!-- Кнопка и ссылки -->
        <div class="flex flex-col items-center gap-4 pt-2">
            <button type="submit" 
                    class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                    style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                Войти
            </button>

            <div class="flex flex-col items-center gap-2 text-sm">
                <a href="{{ route('password.request') }}" 
                   class="text-gray-600 hover:text-[#3B7EFF] transition-colors">
                    Забыли пароль?
                </a>
                <a href="{{ route('register') }}" 
                   class="text-gray-600 hover:text-[#3B7EFF] transition-colors">
                    Нет аккаунта? <span class="font-semibold">Зарегистрироваться</span>
                </a>
            </div>
        </div>
    </form>
</x-guest-layout>