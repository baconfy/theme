@extends('ui::layouts.empty', ['class' => 'flex bg-gray-100 h-screen antialiased leading-none'])

@section('page')
    <div class="w-2/3 flex hidden md:flex" style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="self-end p-8 text-white text-2xl font-bold opacity-50">{{ config('ui.guest.text') }}</p>
    </div>

    <div class="w-full md:w-1/3 flex flex-wrap justify-center">
        <div class="w-3/5 self-center">
            <img src="{{ config('ui.brand-vertical') }}" alt="Baconfy" class="h-16 mb-8">

            <h1 class="text-gray-500 text-xl font-bold mb-1">@yield('title')</h1>
            <h2 class="text-gray-500 text-sm">@yield('welcome')</h2>

            @yield('content')
        </div>
    </div>
@endsection
