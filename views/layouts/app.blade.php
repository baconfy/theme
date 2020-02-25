@extends('ui::layouts.empty', ['class' => 'app'])

@section('page')
    <input type="checkbox" id="navigation-toggle" class="navigation-toggle" />

    <nav class="navigation">
        <div class="brand">
            <img src="{{ config('ui.brand-horizontal') }}" class="img-fluid"/>
        </div>

        <div class="profile">
            <img src="https://scontent-zrh1-1.cdninstagram.com/v/t51.2885-19/s320x320/81837291_226677125012477_7004163985494769664_n.jpg?_nc_ht=scontent-zrh1-1.cdninstagram.com&_nc_ohc=Qto9fUA_ApAAX-FBnfI&oh=46b433280b1ac6bfe0429f3aba6e8a72&oe=5E81F12C" class="img-fluid rounded-circle" />
        </div>

        <ul>
            <li>Home</li>
            <li>Customers</li>
            <li>Products</li>
            <li>Services</li>
            <li>Contact</li>
        </ul>
    </nav>

    <main class="main">
        <label for="navigation-toggle" role="button" aria-labelledby="menu">
            <svg height="32px" style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" width="32px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                <path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2  s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2  S29.104,22,28,22z"/>
            </svg>
        </label>

        @yield('content')
    </main>
@endsection