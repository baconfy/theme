@extends('ui::layouts.empty', ['class' => 'by-app'])

@section('page')
    <input type="checkbox" class="d-none" id="by-navigation-toggle"/>

    <aside class="by-navigation">
        <section class="by-header">
            <img src="{{ config('ui.brand-vertical') }}" class="img-fluid"/>
        </section>

        <section class="by-content">
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

        <section class="by-footer">
            <a class="btn btn-block btn-sm btn-secondary" href="{{ route('logout') }}" title="{{ __('ui::navigation.logout') }}"><i class="fas fa-power-off mr-1"></i> Sign out</a>
        </section>
    </aside>

    <main class="by-content">
        <section class="by-header">
            <label for="by-navigation-toggle" class="hamburger hamburger--elastic" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </label>

            <div class="by-page-title">Dashboard</div>

            <div class="control push">
                <img src="/profile.jpg" class="profile-image img-fluid rounded-circle"/>
            </div>
        </section>

        @yield('content')
    </main>
@endsection
