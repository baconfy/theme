@extends('ui::layouts.auth')

@section('title', __('ui::auth.register.title'))
@section('welcome', __('ui::auth.register.welcome'))

@section('content')
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label class="form-label" for="name">{{ __('ui::auth.register.name') }}</label>
            <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus/>
            @error('name')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="email">{{ __('ui::auth.login.email') }}</label>
            <input id="email" type="email" name="email" class="form-control" value="{{ old('email') }}" required/>
            @error('email')
            <div class="valid-feedback">{{ $message }}</div>@enderror
        </div>

        <div class="form-group">
            <label class="form-label" for="password">{{ __('ui::auth.login.password') }}</label>
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

        <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" name="agreement" id="agreement" {{ old('agreement') ? 'checked' : '' }} />
            <label class="form-check-label" for="agreement">{!! __('ui::auth.register.agreement') !!}</label>
        </div>

        <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.register.action') }}</button>
    </form>

    <div class="divider"></div>
    <p class="text-center">{{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a></p>

    @include('ui::auth.social')
@endsection
