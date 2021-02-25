<x-guest-layout title="Restricted Area" welcome="Please fill your credentials to sign in.">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-input type="email" name="email" label="E-mail address" :value="old('email')" placeholder="email@domain.com" required autofocus />
        <x-input type="password" name="password" label="Your Password" required />

        <div class="flex items-center justify-between">
            <x-checkbox name="remember" label="Keep me logged in" :checked="old('remember')" />

            @if (Route::has('password.request'))
                <x-href href="{{ route('password.request') }}" class="text-xxs uppercase font-semibold">{{ __('Password Recovery') }}</x-href>
            @endif
        </div>

        <x-button class="w-full py-3 mt-8" label="Sign in" />
    </form>

    @if (Route::has('register'))
        <p class="mt-10 text-center text-sm appearance-none text-gray-500 tracking-wide">Don't have an account? <a href="{{ route('register') }}" class="text-primary hover:text-gray-600">{{ __('Register here') }}</a></p>
    @endif
</x-guest-layout>