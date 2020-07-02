@extends('ui::layouts.empty', ['class' => 'app'])

@section('page')
    <input type="checkbox" class="d-none" id="navigation-toggle"/>

    <aside class="navigation">
        <section class="header">
            <img src="{{ config('ui.brand-vertical') }}" class="img-fluid"/>
        </section>

        <section class="module">
            <i class="fas fa-th selector"></i>

            <ul class="items">
                <li><a href="#"><i class="far fa-chart-bar"></i> Analytics</a></li>
                <li><a href="#"><i class="far fa-chart-bar"></i> Roles</a></li>
                <li><a href="#"><i class="far fa-chart-bar"></i> Authentication</a></li>
            </ul>
        </section>

        <section class="content">
            <fieldset>
                <legend>Navigation</legend>

                <ul>
                    <li><a href="#"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-stream"></i> My Activity</a></li>
                </ul>
            </fieldset>

            <fieldset>
                <legend>Settings</legend>

                <ul>
                    <li><a href="#"><i class="fas fa-th-large"></i> Widgets</a></li>
                    <li><a href="#"><i class="fab fa-sourcetree"></i> Data Sources</a></li>
                    <li><a href="#"><i class="fas fa-share-alt"></i> Share Dashboard</a></li>
                    <li><a href="#"><i class="fas fa-globe-americas"></i> Location & Timezone</a></li>
                </ul>
            </fieldset>
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
