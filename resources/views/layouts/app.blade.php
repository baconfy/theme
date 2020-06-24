@extends('ui::layouts.empty', ['class' => 'bg-gray-100'])

@section('page')
    <input type="checkbox" class="hidden" id="navigation-toggle"/>

    <section class="navigation">
        Navigation
    </section>

    <main class="main">
        <label for="navigation-toggle">Open/Close</label>

        @yield('content')
    </main>
@endsection
