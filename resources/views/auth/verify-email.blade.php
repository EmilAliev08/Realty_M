
<x-guest-layout>
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-2">
        Подтверждение email
    </h2>

    <p class="text-center text-sm text-gray-600 mb-6">
        Мы отправили ссылку на вашу почту. Откройте письмо и перейдите по ссылке с любого устройства.
    </p>

    @if (session('status') === 'verification-link-sent')
        <div class="mb-4 p-4 bg-green-50 border border-green-200 rounded-lg">
            <p class="text-sm text-green-700">
                Ссылка для подтверждения отправлена на вашу почту!
            </p>
        </div>
    @elseif (session('status') === 'verification-link-failed')
        <div class="mb-4 p-4 bg-red-50 border border-red-200 rounded-lg">
            <p class="text-sm text-red-700">
                Не удалось отправить письмо. Попробуйте позже.
            </p>
        </div>
    @endif

    <div class="mb-6 p-4 bg-blue-50 border border-blue-200 rounded-lg text-center">
        <p class="text-sm text-blue-700">
            Ожидаем подтверждения...
        </p>
        <p class="text-xs text-blue-600 mt-2">
            Страница автоматически перенаправит вас после подтверждения email.
        </p>
    </div>

    <div class="flex flex-col items-center gap-4">
        <form method="POST" action="{{ route('verification.send') }}" class="w-full">
            @csrf
            <button type="submit"
                class="w-full px-4 py-3 bg-indigo-600 text-white rounded-lg hover:bg-indigo-700">
                Отправить ссылку ещё раз
            </button>
        </form>

        <form method="POST" action="{{ route('logout') }}" class="w-full">
            @csrf
            <button type="submit"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg hover:bg-gray-50">
                Выйти
            </button>
        </form>
    </div>

    <script>
        const verificationStatusUrl = @json(route('verification.status'));
        const homeUrl = @json(route('home'));

        async function checkEmailVerification() {
            try {
                const response = await fetch(verificationStatusUrl, {
                    method: 'GET',
                    credentials: 'same-origin',
                    headers: {
                        'Accept': 'application/json'
                    }
                });

                if (!response.ok) {
                    return;
                }

                const data = await response.json();

                if (data.verified) {
                    window.location.replace(homeUrl);
                }
            } catch (error) {
                console.error('Не удалось проверить статус email:', error);
            }
        }

        checkEmailVerification();
        setInterval(checkEmailVerification, 3000);
    </script>
</x-guest-layout>
