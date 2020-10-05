@extends('ui::layouts.empty')

@section('page')
    <div class="h-screen flex text-gray-600">
        <input type="checkbox" class="hidden" id="by-navigation-toggle"/>
        <div class="by-navigation-overlay"></div>
        <nav class="by-navigation">
            @include('ui::layouts.partials.sidebar')
        </nav>

        <main class="by-content">
            @include('ui::layouts.partials.header')

            @yield('content')
        </main>

        <input type="checkbox" class="hidden" id="by-modules-toggle"/>
        <div class="by-modules">
            @include('ui::layouts.partials.modules')
        </div>

        <input type="checkbox" class="hidden" id="by-notifications-toggle"/>
        <div class="by-notifications">
            @include('ui::layouts.partials.notifications')
        </div>
    </div>
@endsection
