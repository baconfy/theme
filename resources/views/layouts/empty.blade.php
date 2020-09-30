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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Prata&display=swap" />
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
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
