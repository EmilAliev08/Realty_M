<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">
        Установка нового пароля
    </h2>

    <form method="POST" action="{{ route('password.store') }}" class="space-y-5">
        @csrf

        <input type="hidden" name="token" value="{{ request()->route('token') }}">

        <!-- Email -->
        <div>
            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">
                Email
            </label>
            <input id="email" type="email" name="email" 
                   value="{{ old('email', $request->email) }}" 
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
                Новый пароль
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

        <!-- Кнопка -->
        <div class="flex flex-col items-center gap-4 pt-2">
            <button type="submit" 
                    class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                    style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                Сохранить пароль
            </button>
        </div>
    </form>
</x-guest-layout>