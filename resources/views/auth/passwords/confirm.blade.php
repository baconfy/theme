@extends('ui::layouts.auth')

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.password') }}</span>
            <input type="password" name="password" class="form-input" required />
        </label>

        <button class="btn btn-primary" type="submit">{{ __('ui::auth.confirm.action') }}</button>
    </form>

    @if (Route::has('password.request'))
        <a class="mt-10 text-center text-sm" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>
    @endif
@endsection
