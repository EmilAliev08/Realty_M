<section id="about" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        
        <!-- Заголовок секции -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Обо
                <span class="bg-gradient-to-r from-[#3B7EFF] to-[#00A3E0] bg-clip-text text-transparent">
                    мне
                </span>
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Профессиональный риелтор с многолетним опытом работы на рынке недвижимости
            </p>
        </div>

        <!-- Основной блок: фото + информация -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center mb-20">
            
            <!-- Левая часть: Фото -->
            <div class="relative">
                <!-- Декоративный фон за фото -->
                <div class="absolute -top-4 -left-4 w-full h-full rounded-2xl opacity-20"
                     style="background: linear-gradient(135deg, #3B7EFF 0%, #00A3E0 100%);"></div>
                
                <!-- Фото  -->
            <div class="relative rounded-2xl overflow-hidden shadow-2xl aspect-[4/5]">
                <img src="{{ asset('images/marat.jpg') }}" 
                    alt="Марат - риелтор" 
                    class="w-full h-full object-cover object-[center_30%]">
            </div>

            </div>

            <!-- Правая часть: Информация -->
            <div>
                <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                    Марат — ваш надежный партнер в мире недвижимости
                </h3>
                
                <div class="space-y-4 text-lg text-gray-800 leading-relaxed">
                   <p>
                        Здравствуйте! Я занимаюсь сопровождением сделок с недвижимостью. 
                        Моя работа — это не просто поиск квартиры или покупателя, а полное 
                        решение ваших жилищных вопросов с минимальным стрессом для вас.
                    </p>
                    <p>
                        Я беру на себя всю рутину: от анализа рынка и подбора вариантов до 
                        проверки юридической чистоты и организации безопасных расчетов. 
                        Моя главная цель — чтобы вы чувствовали себя уверенно на каждом этапе.
                    </p>
                    <p>
                        Работаю с вторичным рынком и новостройками. Помогаю разобраться 
                        с ипотекой, использованием материнского капитала и другими 
                        нюансами покупки недвижимости.
                    </p>
                </div>

                <!-- Ключевые факты -->
               <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center"
                             style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Работа по договору</div>
                            <div class="text-sm text-gray-600">Официальное оформление и фиксация условий</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center"
                             style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Честные условия</div>
                            <div class="text-sm text-gray-600">Никаких скрытых комиссий и доплат</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center"
                             style="background: linear-gradient(135deg, #00A3E0 0%, #081E57 100%);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Полное сопровождение</div>
                            <div class="text-sm text-gray-600">Веду сделку от первого звонка до ключей</div>
                        </div>
                    </div>
                    <div class="flex items-start space-x-3">
                        <div class="flex-shrink-0 w-10 h-10 rounded-lg flex items-center justify-center"
                             style="background: linear-gradient(135deg, #7A2AFA 0%, #1A0A62 100%);">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <div>
                            <div class="font-semibold text-gray-900">Всегда на связи</div>
                            <div class="text-sm text-gray-600">Оперативно отвечаю на все вопросы</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Блок "Подход к работе" -->
        <div class="bg-gray-50 rounded-3xl p-8 md:p-12">
            <h3 class="text-2xl md:text-3xl font-bold text-gray-900 text-center mb-10">
                Мой подход к работе
            </h3>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Принцип 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center"
                         style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                        <span class="text-2xl font-bold text-white">01</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Внимательность к деталям</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Тщательно проверяю каждый документ и каждую деталь сделки, чтобы исключить любые риски
                    </p>
                </div>

                <!-- Принцип 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center"
                         style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                        <span class="text-2xl font-bold text-white">02</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Честность и открытость</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Всегда говорю правду о ситуации на рынке и возможных подводных камнях, даже если это не в мою пользу
                    </p>
                </div>

                <!-- Принцип 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center"
                         style="background: linear-gradient(135deg, #00A3E0 0%, #081E57 100%);">
                        <span class="text-2xl font-bold text-white">03</span>
                    </div>
                    <h4 class="text-lg font-bold text-gray-900 mb-2">Ориентация на результат</h4>
                    <p class="text-gray-600 text-sm leading-relaxed">
                        Моя цель — не просто закрыть сделку, а найти лучшее решение для вас и вашей семьи
                    </p>
                </div>
            </div>
        </div>

    </div>
</section>