<x-guest-layout :title="__('ui::auth.register.title')" :welcome="__('ui::auth.register.welcome')">
    <form method="POST" action="{{ route('register') }}">
    @csrf

        <!-- Name -->
        <x-input type="text" name="name" :label="__('ui::auth.register.name')" :value="old('name')" required autofocus />

        <!-- Email -->
        <x-input type="email" name="email" :label="__('ui::auth.login.email')" :value="old('email')" required />

        <!-- Password -->
        <x-input type="password" name="password" :label="__('ui::auth.login.password')" :value="old('email')" autocomplete="new-password" required />

        <!-- Confirm Password -->
        <x-input type="password" name="password_confirmation" :label="__('ui::auth.register.confirm')" :value="old('password_confirmation')" required />

        <!-- Policy & Terms agreement -->
        <x-checkbox name="agreement" :label="__('ui::auth.register.agreement', ['terms' => route('terms'), 'privacy' => route('privacy')])" :checked="old('agreement') ? true : false" />

        <x-button class="w-full py-3 mt-8">
            {{ __('ui::auth.register.action') }}
        </x-button>

        @if (Route::has('login'))
            <p class="mt-10 text-center text-gray-600 text-sm">{{ __('ui::auth.register.already-account') }} <x-href href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</x-href></p>
        @endif
    </form>
</x-guest-layout>
