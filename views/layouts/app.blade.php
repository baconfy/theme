@extends('ui::layouts.empty', ['class' => 'app'])

@section('page')
    <input type="checkbox" id="navigation-open" />

    <nav class="navigation">
        <ul>
            <li>Home</li>
            <li>Customers</li>
            <li>Products</li>
            <li>Services</li>
            <li>Contact</li>
        </ul>
    </nav>

    <main class="main">
        <label for="navigation-open" class="navigation-toggle" role="button" aria-labelledby="menu">&#xf0c9;</label>

        @yield('content')
    </main>
@endsection