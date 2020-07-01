@extends('ui::layouts.auth')

@section('title', __('ui::auth.reset.title'))
@section('welcome', __('ui::auth.reset.welcome'))

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label class="form-label" for="email">{{ __('ui::auth.login.email') }}</label>
            <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus/>
            @error('email')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">{{ __('ui::auth.reset.password') }}</label>
            <input id="password" type="password" class="form-control" name="password" required/>
            @error('password')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">{{ __('ui::auth.register.confirm') }}</label>
            <input id="password-confirm" type="password" name="password_confirmation" class="form-control" required/>
            @error('password_confirmation')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.reset.action') }}</button>
    </form>

    <div class="divider"></div>
    <p class="text-center">{{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a></p>
@endsection
