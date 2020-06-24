<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="mobile-web-app-capable" content="yes"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Baconfy') }}</title>

    <!-- Styles -->
    <link rel="icon" href="{{ config('ui.brand-icon') }}" type="image/svg+xml"/>
    <link rel="stylesheet" href="/baconfy/ui/app.css"/>
    @stack('styles')
</head>
<body class="bg-gray-100 h-screen antialiased leading-none {{ $class ?? '' }}">
@yield('page')
</body>

<!-- Scripts -->
<script src="/baconfy/ui/app.js"></script>
@stack('scripts')

</html>