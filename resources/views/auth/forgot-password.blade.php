<x-guest-layout title="Reset Password" welcome="Fill your e-mail account to reset your password.">
    <form method="POST" action="{{ route('password.email') }}">
    @csrf

    <!-- Email Address -->
        <x-input type="email" name="email" label="E-mail address" :value="old('email')" placeholder="email@domain.com" required autofocus/>

        <!-- Action -->
        <x-button class="w-full py-3 mt-8" label="Send me a link"/>

        @if (Route::has('login'))
            <p class="mt-10 text-center text-gray-600 text-sm">{{ __('I already have an account.') }}
                <x-href href="{{ route('login') }}">{{ __('Back to login') }}</x-href>
            </p>
        @endif

        @if (Route::has('register'))
            <p class="mt-2 text-center text-sm appearance-none text-gray-500 tracking-wide">{{ __('Don\'t have an account?') }} <a href="{{ route('register') }}" class="text-primary hover:text-gray-600">{{ __('Register here') }}</a></p>
        @endif
    </form>
</x-guest-layout>
