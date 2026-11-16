
<x-guest-layout>
    <div class="text-center">
        <div class="mb-4 text-5xl">✓</div>

        <h2 class="text-2xl font-bold text-gray-900 mb-3">
            Email подтверждён!
        </h2>

        <p class="text-sm text-gray-600 mb-6">
            Ваш адрес электронной почты успешно подтверждён.
            Теперь вы можете вернуться на устройство, с которого регистрировались.
        </p>

        <a href="{{ route('login') }}"
           class="inline-block px-6 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
            Перейти ко входу
        </a>
    </div>
</x-guest-layout>
