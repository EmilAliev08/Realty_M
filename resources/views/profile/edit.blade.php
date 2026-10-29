<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Профиль') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- Информация о пользователе -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="flex items-center space-x-6">
                    <!-- Аватар (первая буква имени) -->
                    <div class="w-20 h-20 rounded-full flex items-center justify-center text-white font-bold text-2xl shrink-0" 
                         style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                        {{ strtoupper(mb_substr(Auth::user()->name, 0, 1, 'UTF-8')) }}
                    </div>
                    <div>
                        <h3 class="text-2xl font-bold text-gray-900">{{ Auth::user()->name }}</h3>
                        <p class="text-gray-500">{{ Auth::user()->email }}</p>
                        <p class="text-sm text-gray-400 mt-1">Дата регистрации: {{ Auth::user()->created_at->format('d.m.Y') }}</p>
                    </div>
                </div>
            </div>

            <!-- Форма изменения имени и почты -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="text-lg font-bold text-gray-900 mb-4">Личные данные</h4>
                <form method="post" action="{{ route('profile.update') }}" class="space-y-4">
                    @csrf
                    @method('patch')

                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Имя</label>
                        <input id="name" name="name" type="text" value="{{ old('name', $user->name) }}" required autofocus
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all">
                        @error('name') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email', $user->email) }}" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all">
                        @error('email') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex items-center gap-4 pt-2">
                        <button type="submit" class="px-6 py-2 text-white font-bold rounded-lg transition-all hover:opacity-90" 
                                style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                            Сохранить
                        </button>
                        @if (session('status') === 'profile-updated')
                            <p class="text-green-600 text-sm font-medium">Изменения сохранены!</p>
                        @endif
                    </div>
                </form>
            </div>

            <!-- Форма смены пароля -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h4 class="text-lg font-bold text-gray-900 mb-4">Смена пароля</h4>
                <form method="post" action="{{ route('password.update') }}" class="space-y-4">
                    @csrf
                    @method('put')

                    <div>
                        <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">Текущий пароль</label>
                        <input id="current_password" name="current_password" type="password" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all">
                        @error('current_password', 'updatePassword') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="password" class="block text-sm font-medium text-gray-700 mb-2">Новый пароль</label>
                        <input id="password" name="password" type="password" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all">
                        @error('password', 'updatePassword') <p class="text-red-500 text-sm mt-1">{{ $message }}</p> @enderror
                    </div>

                    <div>
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700 mb-2">Подтверждение пароля</label>
                        <input id="password_confirmation" name="password_confirmation" type="password" required
                            class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all">
                    </div>

                    <div class="flex items-center gap-4 pt-2">
                        <button type="submit" class="px-6 py-2 text-white font-bold rounded-lg transition-all hover:opacity-90" 
                                style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                            Сменить пароль
                        </button>
                        @if (session('status') === 'password-updated')
                            <p class="text-green-600 text-sm font-medium">Пароль изменён!</p>
                        @endif
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>