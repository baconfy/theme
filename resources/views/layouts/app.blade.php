@extends('ui::layouts.empty', ['class' => 'bg-gray-100'])

@section('page')
    <input type="checkbox" class="hidden" id="navigation-toggle"/>

    <aside class="navigation">
        <section class="header">
            <img src="{{ config('ui.brand-vertical') }}" class="brand"/>
        </section>

        <section class="content h-screen">
            <ul>
                <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="fab fa-buromobelexperte"></i> Widgets</a></li>
            </ul>
        </section>

        <section class="footer">
            <a href="#" title="{{ __('ui::navigation.support') }}"><i class="fas fa-question-circle"></i></a>
            <a href="#" title="{{ __('ui::navigation.logout') }}"><i class="fas fa-sign-out-alt"></i></a>
        </section>
    </aside>

    <main class="main">
        <label for="navigation-toggle">Open/Close</label>

        @yield('content')
    </main>
@endsection
