@extends('ui::layouts.auth')

@section('title', __('ui::auth.email.title'))
@section('welcome', __('ui::auth.email.welcome'))

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
    @endif

    <form class="form" method="POST" action="{{ route('password.email') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.email') }}</span>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="email@domain.com" required autofocus />
        </label>

        <button class="btn btn-primary" type="submit">{{ __('ui::auth.email.action') }}</button>
    </form>

    @if (Route::has('login'))
        <p class="mt-10 text-center text-sm">{{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a></p>
    @endif
@endsection
