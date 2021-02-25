<x-guest-layout title="Create a new account" welcome="Fill in the information below to create your account.">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <x-input type="text" name="name" label="Name" :value="old('name')" required autofocus />

        <!-- Email -->
        <x-input type="email" name="email" label="E-mail address" :value="old('email')" required />

        <!-- Password -->
        <x-input type="password" name="password" label="Your Password" autocomplete="new-password" required />

        <!-- Confirm Password -->
        <x-input type="password" name="password_confirmation" label="Confirm Your Password" required />

        <!-- Policy & Terms agreement -->
        <label class="flex focus:shadow-none hover:text-gray-500" for="agreement">
            <input type="checkbox" id="agreement" name="agreement" class='mr-2 h-5 w-5 text-primary focus:shadow-none focus:ring-0' />

            <span class="text-gray-400 text-sm">
                I agree to <a class="text-primary" href="{{ route('terms') }}">{{ __('Terms of Service') }}</a> & <a class="text-primary" href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a>
            </span>
        </label>

        <!-- Action -->
        <x-button class="w-full py-3 mt-8" label="Create my account" />

        @if (Route::has('login'))
            <p class="mt-10 text-center text-gray-600 text-sm">{{ __('You already have an account?') }} <x-href href="{{ route('login') }}">{{ __('Back to login') }}</x-href></p>
        @endif
    </form>
</x-guest-layout>
