<x-empty-layout class="flex justify-center h-screen" page-title="Confirm Your Password">

    <div class="px-10 lg:px-20 pb-16 m-auto">
        <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10 mb-10" />

        <h1 class="font-serif leading-tight text-gray-600 text-4xl">{{ __('Confirm Your Password') }}</h1>
        <h2 class="mt-2 mb-7 text-sm text-gray-400">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</h2>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <x-input type="password" name="password" label="Your Password" required />

            <div class="flex items-center justify-between">
                <x-button label="Confirm" />
                <x-href href="{{ url()->previous() }}" class="text-xxs uppercase text-gray-600 hover:text-gray-900">{{ __('Back to the previous page') }}</x-href>
            </div>
        </form>
    </div>

</x-empty-layout>
