<x-guest-layout :title="__('ui::auth.login.title')" :welcome="__('ui::auth.login.welcome')">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-input type="email" name="email" :label="__('ui::auth.login.email')" :value="old('email')" placeholder="email@domain.com" required autofocus />
        <x-input type="password" name="password" :label="__('ui::auth.login.password')" :value="old('email')" required />

        <div class="flex items-center justify-between">
            <x-checkbox name="remember" :label="__('ui::auth.login.remember-password')" :checked="old('remember') ? true : false" />

            @if (Route::has('password.request'))
                <x-href href="{{ route('password.request') }}" class="text-xxs uppercase font-semibold">{{ __('ui::auth.login.forgot-password') }}</x-href>
            @endif
        </div>

        <x-button class="w-full py-3 mt-8" :label="__('ui::auth.login.action')" />
    </form>

    @if (Route::has('register'))
        <p class="mt-10 text-center text-sm">{!! __('ui::auth.login.register-here', ['register' => route('register')])  !!}</p>
    @endif
</x-guest-layout>