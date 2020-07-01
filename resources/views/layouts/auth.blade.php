@extends('ui::layouts.empty', ['class' => 'auth'])

@section('page')
    <aside style="background-image: url('{{ config('ui.guest.background') }}')">
        <p class="">{{ config('ui.guest.text') }}</p>
    </aside>

    <main>
        <div class="content">
            <img src="{{ config('ui.brand-vertical') }}" alt="{{ config('app.name', 'Baconfy') }}" class="brand"/>

            <h1>@yield('title')</h1>
            <h2>@yield('welcome')</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            @yield('content')
        </div>
    </main>
@endsection