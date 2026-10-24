<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">
        Регистрация
    </h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-5">
        @csrf

        <!-- Имя -->
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">
                Имя
            </label>
            <input id="name" type="text" name="name" 
                   value="{{ old('name') }}" 
                   required autofocus autocomplete="name"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white @error('name') border-red-500 @enderror"
                   placeholder="Иван Иванов">
            @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email') }}" 
                   required autocomplete="username"
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
                   required autocomplete="new-password"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white @error('password') border-red-500 @enderror"
                   placeholder="Минимум 8 символов">
            @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
            @enderror
        </div>

        <!-- Подтверждение пароля -->
        <div>
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                Подтвердите пароль
            </label>
            <input id="password_confirmation" type="password" name="password_confirmation" 
                   required autocomplete="new-password"
                   class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white"
                   placeholder="Повторите пароль">
        </div>

        <!-- Кнопка и ссылка на вход -->
        <div class="flex flex-col items-center gap-4 pt-2">
            <button type="submit" 
                    class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                    style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                Зарегистрироваться
            </button>

            <a href="{{ route('login') }}" 
               class="text-sm text-gray-600 hover:text-[#3B7EFF] transition-colors">
                Уже есть аккаунт? <span class="font-semibold">Войти</span>
            </a>
        </div>
    </form>
</x-guest-layout>