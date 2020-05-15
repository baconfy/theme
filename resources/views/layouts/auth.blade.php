@extends('ui::layouts.empty', ['class' => 'auth'])

@push('styles')
    <link rel="icon" href="{{ config('ui.brand-icon') }}" type="image/svg+xml"/>
    <link rel="stylesheet" href="/baconfy/ui/app.css"/>
@endpush

@push('scripts')
    <script src="/baconfy/ui/app.js"></script>
@endpush

@section('page')
    <div class="grid grid-cols-3">
        <div class="col-span-2 hidden items-end lg:block lg:flex lg:min-h-screen" style="background-image: url('{{ config('ui.guest.background') }}')">
            <p class="text-right text-white text-3xl text-opacity-50 p-8">{{ config('ui.guest.text') }}</p>
        </div>

        <div class="col-span-3 lg:col-span-1 lg:min-h-screen p-10 sm:p-24">
            <div class="flex-grow">
                <img src="{{ config('ui.brand-vertical') }}"/>

                <h3 class="content-heading mb-1">@yield('title')</h3>
                @yield('content')
            </div>
        </div>
    </div>
@endsection