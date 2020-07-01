@extends('ui::layouts.empty', ['class' => 'app'])

@section('page')
    <input type="checkbox" class="d-none" id="navigation-toggle"/>

    <aside class="navigation">
        <section class="header">
            <img src="{{ config('ui.brand-vertical') }}" class="img-fluid"/>
        </section>

        <section class="module">
            MODULE
        </section>

        <section class="content flex-fill">
            <ul>
                <li><a href="#"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                <li><a href="#"><i class="fab fa-buromobelexperte"></i> Widgets</a></li>
            </ul>
        </section>

        <section class="footer">
            <a class="btn btn-block btn-sm btn-secondary" href="{{ route('logout') }}" title="{{ __('ui::navigation.logout') }}"><i class="fas fa-power-off mr-1"></i> Sign out</a>
        </section>
    </aside>

    <main class="content">
        <label for="navigation-toggle">Open/Close</label>

        @yield('content')
    </main>
@endsection
