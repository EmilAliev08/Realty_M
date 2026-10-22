<section id="reviews" class="py-20 bg-white" data-component="reviews">
    <div class="container mx-auto px-4">
        
        <!-- Заголовок секции -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4">
                Отзывы
                <span class="bg-gradient-to-r from-[#3B7EFF] to-[#00A3E0] bg-clip-text text-transparent">
                    клиентов
                </span>
            </h2>
            <p class="text-lg text-gray-600 leading-relaxed">
                Мнение людей, которые уже решили свои жилищные вопросы вместе со мной
            </p>
        </div>

        <!-- Сетка отзывов -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
            
            {{-- В будущем этот блок будет заменен на цикл: @foreach($reviews as $review) --}}

            <!-- Отзыв 1 -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="flex items-center mb-4">
                    <!-- Аватар (заглушка с инициалами) -->
                    <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" 
                         style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                        А
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Александр Петров</h4>
                        <p class="text-xs text-gray-500">15 октября 2026</p>
                    </div>
                </div>
                
                <!-- Звезды рейтинга -->
                <div class="flex text-yellow-400 mb-4">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>

                <p class="text-gray-600 leading-relaxed flex-grow">
                    «Обратился к Марату для покупки квартиры в новостройке. Очень переживал за надежность застройщика, но Марат провел полную проверку, помог с ипотекой и сопровождал сделку до самого получения ключей. Рекомендую!»
                </p>
            </div>

            <!-- Отзыв 2 -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" 
                         style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                        Е
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Елена Смирнова</h4>
                        <p class="text-xs text-gray-500">02 октября 2026</p>
                    </div>
                </div>
                
                <div class="flex text-yellow-400 mb-4">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>

                <p class="text-gray-600 leading-relaxed flex-grow">
                    «Продавали вторичку и покупали новую. Казалось, это нереально сложный процесс, но Марат взял все заботы на себя. Нашел покупателя за неделю, а нам подобрал идеальную квартиру. Спасибо за профессионализм!»
                </p>
            </div>

            <!-- Отзыв 3 -->
            <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300 flex flex-col">
                <div class="flex items-center mb-4">
                    <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" 
                         style="background: linear-gradient(135deg, #00A3E0 0%, #081E57 100%);">
                        Д
                    </div>
                    <div>
                        <h4 class="font-bold text-gray-900">Дмитрий Волков</h4>
                        <p class="text-xs text-gray-500">28 сентября 2026</p>
                    </div>
                </div>
                
                <div class="flex text-yellow-400 mb-4">
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                </div>

                <p class="text-gray-600 leading-relaxed flex-grow">
                    «Отличная консультация по документам. Марат нашел ошибку в договоре, которую не заметили юристы продавца. Благодаря ему я не потерял деньги. Очень внимательный и грамотный специалист.»
                </p>
            </div>

            {{-- @endforeach --}}

        </div>

        <!-- Форма отправки отзыва -->
        <div class="max-w-2xl mx-auto">
            <div class="bg-gray-50 rounded-2xl p-8 md:p-12 border border-gray-200">
                <h3 class="text-2xl font-bold text-gray-900 mb-2 text-center">Оставить отзыв</h3>
                <p class="text-gray-600 text-center mb-8">
                    Поделитесь своим опытом работы. Отзыв будет опубликован после проверки модератором.
                </p>

                <form action="#" method="POST" class="space-y-6" data-review-form>
                    {{-- В будущем здесь будет @csrf --}}

                    <!-- Имя -->
                    <div>
                        <label for="review-name" class="block text-sm font-medium text-gray-700 mb-2">Ваше имя</label>
                        <input type="text" id="review-name" name="name" required
                               class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white"
                               placeholder="Иван Иванов">
                    </div>

                    <!-- Оценка (Звезды) -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-2">Ваша оценка</label>
                        <div class="flex space-x-2 text-gray-300 cursor-pointer" data-star-rating>
                            <!-- Звезды будут оживать с помощью JS, пока просто визуал -->
                            <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        </div>
                        <input type="hidden" name="rating" value="0" data-rating-input>
                    </div>

                    <!-- Текст отзыва -->
                    <div>
                        <label for="review-text" class="block text-sm font-medium text-gray-700 mb-2">Текст отзыва</label>
                        <textarea id="review-text" name="text" rows="4" required
                                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white resize-none"
                                  placeholder="Расскажите о вашем опыте..."></textarea>
                    </div>

                    <!-- Кнопка отправки -->
                    <button type="submit" 
                            class="w-full py-4 text-white font-bold rounded-lg transition-all duration-300 hover:opacity-90 hover:scale-[1.01] shadow-lg"
                            style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">
                        Отправить отзыв
                    </button>
                </form>
            </div>
        </div>

    </div>
</section>