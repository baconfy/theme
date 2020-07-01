@extends('ui::layouts.auth')

@section('title', __('ui::auth.login.title'))
@section('welcome', __('ui::auth.login.welcome'))

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label class="form-label" for="email">{{ __('ui::auth.login.email') }}</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus/>
            @error('email')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">{{ __('ui::auth.login.password') }}</label>
            <input id="password" type="password" name="password" class="form-control" required/>
            @error('password')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">{{ __('ui::auth.login.remember-password') }}</label>
        </div>

        <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.login.action') }}</button>
    </form>

    @if (Route::has('password.request'))
        <div class="divider"></div>
        <a class="d-block text-center" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>

        @if (Route::has('register'))
            {!! __('ui::auth.login.register-here', ['register' => route('register')])  !!}
        @endif
    @endif

    @include('ui::auth.social')
@endsection
