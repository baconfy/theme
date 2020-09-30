@extends('ui::layouts.auth')

@section('title', __('ui::auth.reset.title'))
@section('welcome', __('ui::auth.reset.welcome'))

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.email') }}</span>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="email@domain.com" required autofocus />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.reset.password') }}</span>
            <input type="password" name="password" class="form-input" required />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.register.confirm') }}</span>
            <input type="password" name="password_confirmation" class="form-input" required />
        </label>

        <button class="btn btn-primary" type="submit">{{ __('ui::auth.reset.action') }}</button>
    </form>

    <p class="mt-10 text-center text-sm">{{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a></p>
@endsection
