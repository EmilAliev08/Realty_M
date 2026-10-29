<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Логотип / Название сайта -->
            <a href="{{ route('home') }}" class="text-2xl font-bold tracking-tight" style="color: #161B5E;">
                Realty_M
            </a>
            
            <!-- Меню для десктопа -->
            <ul class="hidden lg:flex space-x-8 text-sm font-medium">
                <li><a href="/#hero" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Главная</a></li>
                <li><a href="/#advantages" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Преимущества</a></li>
                <li><a href="/#services" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Услуги</a></li>
                <li><a href="/#about" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Обо мне</a></li>
                <li><a href="/#process" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Как проходит работа</a></li>
                <li><a href="/#contacts" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Контакты</a></li>
                <li><a href="/#reviews" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Отзывы</a></li>
            </ul>
            
            <!-- Кнопки авторизации для десктопа -->
            <div class="hidden lg:flex items-center space-x-3">
                @auth
                    {{-- Выпадающее меню профиля на Alpine.js --}}
                    <div x-data="{ open: false }" class="relative">
                        <button @click="open = !open" 
                                class="w-10 h-10 rounded-full bg-gradient-to-br from-[#3B7EFF] to-[#0D2E99] flex items-center justify-center text-white hover:opacity-90 transition-all duration-300 hover:scale-105 focus:outline-none">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </button>

                        <div x-show="open" 
                             @click.away="open = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100"
                             x-transition:leave="transition ease-in duration-75"
                             x-transition:leave-start="opacity-100 scale-100"
                             x-transition:leave-end="opacity-0 scale-95"
                             class="absolute right-0 mt-2 w-56 bg-white rounded-lg shadow-lg border border-gray-100 py-2 z-50"
                             style="display: none;">
                            
                            <div class="px-4 py-2 border-b border-gray-100">
                                <p class="text-sm font-semibold text-gray-900 truncate">{{ auth()->user()->name }}</p>
                                <p class="text-xs text-gray-500 truncate">{{ auth()->user()->email }}</p>
                            </div>

                            <a href="{{ route('profile.edit') }}" 
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Мой профиль
                                </div>
                            </a>

                            <a href="{{ route('home') }}" 
                               class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 transition-colors">
                                <div class="flex items-center gap-2">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                    </svg>
                                    На главную
                                </div>
                            </a>

                            <div class="border-t border-gray-100 my-1"></div>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" 
                                        class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                        </svg>
                                        Выйти
                                    </div>
                                </button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" 
                       class="px-5 py-2.5 text-sm font-semibold text-white rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.02]"
                       style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                        Авторизация
                    </a>
                    <a href="{{ route('register') }}" 
                       class="px-5 py-2.5 text-sm font-semibold text-white rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.02]"
                       style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                        Регистрация
                    </a>
                @endauth
            </div>
            

            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 text-gray-700 hover:text-[#3B7EFF] transition-colors focus:outline-none">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
    
        <div id="mobile-menu" class="hidden lg:hidden mt-4 pb-4 border-t border-gray-100 pt-4 space-y-3">
            <a href="#hero" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Главная</a>
            <a href="#advantages" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Преимущества</a>
            <a href="#services" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Услуги</a>
            <a href="#about" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Обо мне</a>
            <a href="#process" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Как проходит работа</a>
            <a href="#contacts" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Контакты</a>
            <a href="#reviews" class="block py-2 text-gray-700 hover:text-[#3B7EFF] font-medium transition-colors">Отзывы</a>
            
            <!-- Кнопки для мобильной версии -->
            <div class="pt-3 flex flex-col space-y-3">
                @auth
                    <a href="{{ route('profile.edit') }}" 
                       class="w-full px-5 py-2.5 text-sm font-semibold text-center rounded-lg transition-all hover:opacity-90"
                       style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%); color: white;">
                        Профиль
                    </a>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" 
                                class="w-full px-5 py-2.5 text-sm font-semibold rounded-lg border-2 border-red-500 text-red-500 hover:bg-red-500 hover:text-white transition-all">
                            Выйти
                        </button>
                    </form>
                @else
                    <a href="{{ route('login') }}" 
                       class="w-full px-5 py-2.5 text-sm font-semibold text-center rounded-lg border-2 border-[#3B7EFF] text-[#3B7EFF] hover:bg-[#3B7EFF] hover:text-white transition-all">
                        Авторизация
                    </a>
                    <a href="{{ route('register') }}" 
                       class="w-full px-5 py-2.5 text-sm font-semibold text-center rounded-lg transition-all hover:opacity-90"
                       style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%); color: white;">
                        Регистрация
                    </a>
                @endauth
            </div>
        </div>
    </nav>
</header>