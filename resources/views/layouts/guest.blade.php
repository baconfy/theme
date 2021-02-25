<x-empty-layout class="guest flex h-screen" page-title="{{ $attributes['page-title'] }}">
    <div class="hidden flex-1 content-end flex-wrap lg:flex" style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="text-white text-2xl leading-tight m-5">{{ config('ui.guest.text') }}</p>
    </div>

    <div class="flex flex-col justify-between w-full lg:w-1/3">
        <header class="py-8 px-5 lg:px-10">
            <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10" />
        </header>

        <main class="px-10 mb-16 lg:px-20">
            <h1 class="font-serif leading-tight text-gray-600 text-4xl">{{ __($attributes['page-title']) }}</h1>
            <h2 class="mt-2 mb-7 text-sm text-gray-400">{{ __($attributes['welcome']) }}</h2>

            <!-- Validation Errors -->
            <x-validation-errors class="mb-4" :errors="$errors" />

            <!-- Session Status -->
            <x-session-status class="mb-4" :status="session('status')"/>

            {{ $slot }}
        </main>

        <footer class="flex flex-col lg:flex-row items-center justify-between py-3 px-5 lg:px-10">
            <div class="leading-tight text-xs tracking-wide text-gray-500">©{{ date('Y') }} - {{ __('All Rights Reserved') }}</div>
            <div class="text-gray-400 text-xs">
                <a class="leading-tight text-xs tracking-wide leading-tight text-primary mr-1" href="{{ route('terms') }}">{{ __('Terms of Service') }}</a>
                &#8226;
                <a class="leading-tight text-xs tracking-wide leading-tight text-primary ml-1" href="{{ route('privacy') }}">{{ __('Privacy Policy') }}</a>
            </div>
        </footer>
    </div>
</x-empty-layout>