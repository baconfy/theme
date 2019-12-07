<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="theme-color" content="#a23e3e"/>
    <meta name="referrer" content="origin"/>

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="/baconfy/app.css"/>
</head>

<body class="auth">
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex col-md-6 col-lg-8 image" style="background-image: url('{{ config('theme.guest.background') }}')"></div>
        <div class="col-md-6 col-lg-4">
            <div class="login d-flex align-items-center py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <div class="logo mb-4">
                                <img src="{{ config('theme.logo') }}"/>
                                <h1>{{ config('app.name') }}</h1>
                            </div>

                            <h3 class="login-heading mb-4">@yield('title')</h3>

                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/baconfy/app.js"></script>
</body>
</html>