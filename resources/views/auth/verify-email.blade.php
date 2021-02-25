<x-guest-layout title="E-mail Verification" welcome="Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.">
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-button label="Resend Verification E-mail" />
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-xxs uppercase text-gray-600 hover:text-gray-900">{{ __('Log out') }}</button>
        </form>
    </div>
</x-guest-layout>