<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="theme-color" content="#a23e3e" />

    <title>{{ config('app.name') }}</title>

    <link rel="icon" href="{{ config('ui.brand-icon') }}" type="image/svg+xml"/>
    <link rel="stylesheet" href="/baconfy/ui/app.css"/>
</head>

<body class="{{ $class ?? '' }}">
    @yield('page')

    <script src="/baconfy/ui/app.js"></script>
</body>
</html>