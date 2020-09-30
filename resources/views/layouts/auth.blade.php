@extends('ui::layouts.empty', ['class' => 'flex h-screen'])

@section('page')
    <div class="hidden flex-1 content-end flex-wrap lg:flex" style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="text-white text-2xl leading-tight m-5">{{ config('ui.guest.text') }}</p>
    </div>

    <div class="flex flex-col justify-between w-full lg:w-1/3">
        <header class="p-4">
            <img src="{{ config('ui.brand-vertical') }}" alt="{{ config('app.name', 'Baconfy') }}" class="h-15" />
        </header>

        <main class="px-10 lg:px-20">
            <h1 class="font-serif leading-tight text-4xl">@yield('title')</h1>
            <h2 class="mt-3 mb-15 text-sm text-gray-400">@yield('welcome')</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </main>

        <footer class="flex flex-col lg:flex-row items-center justify-between py-1 px-2 mt-20">
            <div class="leading-tight text-xs tracking-wide text-gray-500">©{{ date('Y') }} - All Rights Reserved</div>
            <div class="text-gray-400">
                <a href="#" class="leading-tight text-xs uppercase tracking-wide leading-tight font-semibold text-blue-400">Cookie Preferences</a> &#8226;
                <a href="#" class="leading-tight text-xs uppercase tracking-wide leading-tight font-semibold text-blue-400">Privacy & Terms</a>
            </div>
        </footer>
    </div>
@endsection
