<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Metadata -->
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="mobile-web-app-capable" content="yes"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Page Title -->
    <title>{{ config('app.name', 'Baconfy') }}</title>

    <!-- Page Icon -->
    <link rel="icon" href="{{ config('ui.brand-icon') }}" type="image/svg+xml"/>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prata&display=swap" />
    <link rel="stylesheet" href="/baconfy/ui/app.css"/>
    @stack('styles')
</head>

<body class="antialiased text-gray-600 {{ $class ?? '' }}">
    @yield('page')
</body>

<!-- Scripts -->
<script src="/baconfy/ui/vendor.js"></script>
<script src="/baconfy/ui/app.js"></script>
@stack('scripts')
</html>
