<header class="bg-white shadow-md sticky top-0 z-50">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex justify-between items-center">
            <!-- Логотип / Название сайта -->
            <a href="#" class="text-2xl font-bold tracking-tight" style="color: #161B5E;">
                Realty_M
            </a>
            
            <!-- Меню для десктопа -->
            <ul class="hidden lg:flex space-x-8 text-sm font-medium">
                <li><a href="#hero" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Главная</a></li>
                <li><a href="#advantages" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Преимущества</a></li>
                <li><a href="#services" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Услуги</a></li>
                <li><a href="#about" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Обо мне</a></li>
                <li><a href="#process" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Как проходит работа</a></li>
                <li><a href="#contacts" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Контакты</a></li>
                <li><a href="#reviews" class="text-gray-700 hover:text-[#3B7EFF] transition-colors duration-300">Отзывы</a></li>
               
            </ul>
            
            <!-- Кнопки авторизации и регистрации (заглушки) -->
            <div class="hidden lg:flex items-center space-x-3">
                <button type="button" class="px-5 py-2.5 text-sm font-semibold text-white rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.02]" 
                        style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                    Авторизация
                </button>
                <button type="button" class="px-5 py-2.5 text-sm font-semibold text-white rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.02]" 
                        style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                    Регистрация
                </button>
            </div>
            
            <!-- Кнопка мобильного меню -->
            <button id="mobile-menu-btn" type="button" class="lg:hidden p-2 text-gray-700 hover:text-[#3B7EFF] transition-colors">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
        
        <!-- Мобильное меню -->
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
                <button type="button" class="w-full py-3 text-sm font-semibold text-white rounded-lg transition-all" 
                        style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                    Авторизация
                </button>
                <button type="button" class="w-full py-3 text-sm font-semibold text-white rounded-lg transition-all" 
                        style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                    Регистрация
                </button>
            </div>
        </div>
    </nav>
</header>