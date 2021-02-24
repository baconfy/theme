<x-guest-layout :title="__('ui::auth.email.title')" :welcome="__('ui::auth.email.welcome')">
    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <x-input type="email" name="email" :label="__('ui::auth.login.email')" :value="old('email')" placeholder="email@domain.com" required autofocus />

        <x-button class="w-full py-3 mt-8">{{ __('ui::auth.email.action') }}</x-button>

        @if (Route::has('login'))
            <p class="mt-10 text-center text-gray-600 text-sm">{{ __('ui::auth.register.already-account') }} <x-href href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</x-href></p>
        @endif
    </form>
</x-guest-layout>
