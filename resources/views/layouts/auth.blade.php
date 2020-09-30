@extends('ui::layouts.empty', ['class' => 'flex h-screen '])

@section('page')
    <div class="flex flex-1 content-end flex-wrap" style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="text-white text-2xl leading-tight m-5">{{ config('ui.guest.text') }}</p>
    </div>

    <div class="flex flex-col justify-between w-1/3">
        <header class="p-4">
            <img src="{{ config('ui.brand-vertical') }}" alt="{{ config('app.name', 'Baconfy') }}" class="h-15" />
        </header>

        <main class="px-15">
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

        <footer class="p-4">
            <div class="text-xs tracking-wide text-gray-500 leading-tight">©{{ date('Y') }} - All Rights Reserved</div>
            <div>
                <a href="#" class="text-xxs uppercase tracking-wide leading-tight font-semibold text-blue-400 mr-3">Cookie Preferences</a>
                <a href="#" class="text-xxs uppercase tracking-wide leading-tight font-semibold text-blue-400">Privacy & Terms</a>
            </div>
        </footer>
    </div>
@endsection
