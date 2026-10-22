<section id="hero" class="relative min-h-screen flex items-center overflow-hidden" 
         style="background: linear-gradient(135deg, #0B1E38 0%, #161B5E 50%, #0015ff 100%);">
    
    <!-- Декоративные элементы фона -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-96 h-96 rounded-full opacity-20" 
             style="background: radial-gradient(circle, #3B7EFF 0%, transparent 70%);"></div>
        <div class="absolute -bottom-40 -left-40 w-96 h-96 rounded-full opacity-20" 
             style="background: radial-gradient(circle, #00A3E0 0%, transparent 70%);"></div>
    </div>

    <div class="container mx-auto px-4 py-20 relative z-10">
        <div class="max-w-4xl mx-auto text-center">
            
            <!-- Бейдж -->
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-white/10 backdrop-blur-sm border border-white/20 mb-8">
                <span class="w-2 h-2 rounded-full bg-green-400 mr-2 animate-pulse"></span>
                <span class="text-white/90 text-sm font-medium">Принимаю новых клиентов</span>
            </div>

            <!-- Заголовок -->
            <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold text-white mb-6 leading-tight">
                Ваш персональный
                <span class="block mt-2" style="background: linear-gradient(135deg, #3B7EFF 0%, #00A3E0 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">
                    риелтор
                </span>
            </h1>

            <!-- Подзаголовок -->
            <p class="text-lg md:text-xl text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                Профессиональное сопровождение сделок с недвижимостью. 
                От первого звонка до получения ключей — я буду рядом на каждом этапе.
            </p>

            <!-- Кнопки CTA -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-16">
                <a href="#contacts" class="px-8 py-4 text-white font-semibold rounded-lg text-lg transition-all duration-300 hover:scale-105 hover:shadow-2xl" 
                   style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%); box-shadow: 0 10px 40px rgba(59, 126, 255, 0.4);">
                    Получить консультацию
                </a>
                <a href="#services" class="px-8 py-4 text-white font-semibold rounded-lg text-lg border-2 border-white/30 hover:border-white/60 hover:bg-white/10 transition-all duration-300">
                    Узнать об услугах
                </a>
            </div>

            <!-- Статистика -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 max-w-3xl mx-auto">
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">10+</div>
                    <div class="text-sm text-gray-400">лет опыта</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">500+</div>
                    <div class="text-sm text-gray-400">успешных сделок</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">98%</div>
                    <div class="text-sm text-gray-400">довольных клиентов</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl md:text-4xl font-bold text-white mb-1">24/7</div>
                    <div class="text-sm text-gray-400">на связи</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Индикатор прокрутки вниз -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-white/60" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>