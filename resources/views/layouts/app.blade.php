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
        <div class="by-modules flex fixed w-full content-center flex-wrap bg-white h-full z-20">
            <div class="w-full p-2">
                <div class="text-center p-2">
                    <i class="fas fa-th-large mr-2"></i>
                </div>
            </div>
        </div>
    </div>
@endsection
