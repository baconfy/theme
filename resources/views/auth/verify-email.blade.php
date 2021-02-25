<x-guest-layout :title="__('ui::auth.verify.title')" :welcome="__('ui::auth.verify.welcome')">
    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">{{ __('ui::auth.verify.alert') }}</div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <x-button :label="__('ui::auth.verify.action')" />
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="text-xxs uppercase text-gray-600 hover:text-gray-900">{{ __('Log out') }}</button>
        </form>
    </div>
</x-guest-layout>