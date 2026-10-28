<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-2">
        Подтверждение пароля
    </h2>
    <p class="text-center text-sm text-gray-600 mb-6">
        Это защищённая область. Пожалуйста, подтвердите свой пароль.
    </p>

    <form method="POST" action="{{ route('password.confirm') }}" class="space-y-5">
        @csrf

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

        <!-- Кнопка -->
        <div class="flex flex-col items-center gap-4 pt-2">
            <button type="submit" 
                    class="w-full py-3 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                    style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                Подтвердить
            </button>
        </div>
    </form>
</x-guest-layout>