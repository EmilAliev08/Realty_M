@props(['reviews'])

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

        <!-- Сетка отзывов из БД -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20" id="reviews-list">
            
            @forelse($reviews as $review)
                <!-- Один отзыв -->
                <div class="bg-gray-50 rounded-2xl p-8 border border-gray-100 hover:shadow-xl transition-shadow duration-300 flex flex-col">
                    <div class="flex items-center mb-4">
                        <!-- Аватар с инициалами -->
                        <div class="w-12 h-12 rounded-full flex items-center justify-center text-white font-bold text-lg mr-4" 
                             style="background: linear-gradient(135deg, #4A55D3 0%, #161B5E 100%);">
                            {{ mb_strtoupper(mb_substr($review->user->name, 0, 1)) }}
                        </div>
                        <div>
                            <h4 class="font-bold text-gray-900">{{ $review->user->name }}</h4>
                            <p class="text-xs text-gray-500">{{ $review->created_at->format('d F Y') }}</p>
                        </div>
                    </div>
                    
                    <!-- Звезды рейтинга -->
                    <div class="flex mb-4">
                        @for($i = 1; $i <= 5; $i++)
                            <svg class="w-5 h-5 {{ $i <= $review->rating ? 'text-yellow-400' : 'text-gray-300' }} fill-current" viewBox="0 0 20 20">
                                <path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/>
                            </svg>
                        @endfor
                    </div>

                    <p class="text-gray-600 leading-relaxed flex-grow">
                        «{{ $review->review_text }}»
                    </p>
                </div>
            @empty
                <!-- Если отзывов нет -->
                <div class="col-span-full text-center py-12">
                    <p class="text-gray-500 text-lg">Отзывов пока нет. Будьте первым!</p>
                </div>
            @endforelse

        </div>

        <!-- Форма отправки отзыва -->
        @auth
            <div class="max-w-2xl mx-auto">
                <div class="bg-gray-50 rounded-2xl p-8 md:p-12 border border-gray-200">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 text-center">Оставить отзыв</h3>
                    <p class="text-gray-600 text-center mb-8">
                        Поделитесь своим опытом работы. Отзыв появится на сайте сразу после отправки.
                    </p>

                    <form action="{{ route('reviews.store') }}" method="POST" class="space-y-6" id="review-form">
                        @csrf

                        <!-- Оценка (Звезды) -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Ваша оценка <span class="text-red-500">*</span></label>
                            <div class="flex space-x-2 text-gray-300 cursor-pointer" data-star-rating>
                                <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                                <svg class="w-8 h-8 hover:text-yellow-400 transition-colors star-icon" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                            </div>
                            <input type="hidden" name="rating" value="0" data-rating-input>
                            @error('rating')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Текст отзыва -->
                        <div>
                            <label for="review-text" class="block text-sm font-medium text-gray-700 mb-2">Текст отзыва <span class="text-red-500">*</span></label>
                            <textarea id="review-text" name="review_text" rows="4" required minlength="10" maxlength="1000"
                                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-[#3B7EFF] focus:ring-2 focus:ring-[#3B7EFF]/20 outline-none transition-all bg-white resize-none @error('review_text') border-red-500 @enderror"
                                    placeholder="Расскажите о вашем опыте (минимум 10 символов)...">{{ old('review_text') }}</textarea>
                            @error('review_text')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
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
        @else
            <div class="max-w-2xl mx-auto mb-12 text-center bg-white p-8 rounded-2xl shadow-lg">
                <h3 class="text-xl font-bold mb-4">Хотите оставить отзыв?</h3>
                <p class="text-gray-600 mb-6">Войдите в аккаунт, чтобы поделиться мнением</p>
                <a href="{{ route('login') }}" class="px-6 py-3 text-white rounded-lg" style="background: linear-gradient(135deg, #3B7EFF 0%, #0D2E99 100%);">Войти</a>
            </div>  
        @endauth

    </div>
</section>

<!-- JavaScript для отправки без моргания -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('review-form');
    if (!form) return;

    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        const ratingInput = form.querySelector('[data-rating-input]');
        if (!ratingInput || ratingInput.value === '0') {
            // Удаляем старые ошибки
            form.querySelectorAll('.rating-validation-error').forEach(el => el.remove());
            const err = document.createElement('p');
            err.className = 'rating-validation-error text-red-500 text-sm mt-2';
            err.textContent = 'Пожалуйста, выберите оценку';
            form.querySelector('[data-star-rating]').after(err);
            return;
        }

        const formData = new FormData(form);
        const token = form.querySelector('input[name="_token"]').value;

        // Удаляем старые сообщения
        form.querySelectorAll('.review-message').forEach(el => el.remove());

        try {
            const response = await fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': token,
                    'Accept': 'application/json',
                },
                body: formData,
            });

            if (response.ok) {
                const msg = document.createElement('div');
                msg.className = 'review-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-6';
                msg.textContent = 'Спасибо за ваш отзыв!';
                form.insertBefore(msg, form.firstChild);

                form.reset();
                ratingInput.value = '0';
                form.querySelectorAll('.star-icon').forEach(s => {
                    s.classList.remove('text-yellow-400');
                    s.classList.add('text-gray-300');
                });

                // Перезагружаем список отзывов через 1 секунду
                setTimeout(() => window.location.reload(), 1000);
            } else if (response.status === 422) {
                const data = await response.json();
                Object.values(data.errors || {}).flat().forEach(msg => {
                    const err = document.createElement('p');
                    err.className = 'review-message text-red-500 text-sm mt-2';
                    err.textContent = msg;
                    form.appendChild(err);
                });
            } else {
                const msg = document.createElement('div');
                msg.className = 'review-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-6';
                msg.textContent = 'Произошла ошибка. Попробуйте ещё раз.';
                form.insertBefore(msg, form.firstChild);
            }
        } catch (error) {
            console.error('Ошибка:', error);
        }
    });
});
</script>