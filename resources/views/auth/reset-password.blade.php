<x-guest-layout title="Reset Password" welcome="Fill the form below to reset your password.">
    <form method="POST" action="{{ route('password.email') }}">
    @csrf

        <!-- Email Address -->
        <x-input label="E-mail address" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />

        <!-- New Password -->
        <x-input label="New Password" class="block mt-1 w-full" type="password" name="password" required />

        <!-- Password -->
        <x-input label="Confirm your new password" class="block mt-1 w-full" type="password" name="password_confirmation" required />

        <!-- Action -->
        <x-button class="w-full py-3 mt-8" label="Reset my password" />

        @if (Route::has('login'))
            <p class="mt-10 text-center text-gray-600 text-sm">{{ __('I already have an account.') }} <x-href href="{{ route('login') }}">{{ __('Back to login') }}</x-href></p>
        @endif
    </form>
</x-guest-layout>
