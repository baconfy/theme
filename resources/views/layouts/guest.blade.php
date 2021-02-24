<x-empty-layout class="guest flex h-screen">
    <div class="hidden flex-1 content-end flex-wrap lg:flex" style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="text-white text-2xl leading-tight m-5">{{ config('ui.guest.text') }}</p>
    </div>

    <div class="flex flex-col justify-between w-full lg:w-1/3">
        <header class="py-8 px-5 lg:px-10">
            <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10" />
        </header>

        <main class="px-10 mb-16 lg:px-20">
            <h1 class="font-serif leading-tight text-gray-600 text-4xl">{{ $title }}</h1>
            <h2 class="mt-2 mb-7 text-sm text-gray-400">{{ $welcome }}</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ $slot }}
        </main>

        <footer class="flex flex-col lg:flex-row items-center justify-between py-3 px-5 lg:px-10">
            <div class="leading-tight text-xs tracking-wide text-gray-500">©{{ date('Y') }} - All Rights Reserved</div>
            <div class="text-gray-400 text-xs">
                {!! __('ui::auth.guest.agreement', ['terms' => route('terms'), 'privacy' => route('privacy')])  !!}
            </div>
        </footer>
    </div>
</x-empty-layout>