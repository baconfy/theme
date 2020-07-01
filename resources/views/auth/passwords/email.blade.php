@extends('ui::layouts.auth')

@section('title', __('ui::auth.email.title'))
@section('welcome', __('ui::auth.email.welcome'))

@section('content')
    <section>
        @if (session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif

        <form class="form" method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="form-group">
                <label class="form-label" for="email">{{ __('ui::auth.login.email') }}</label>
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                @error('email')
                <div class="valid-feedback">{{ $message }}</div>@enderror
            </div>

            <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.email.action') }}</button>
        </form>

        @if (Route::has('login'))
            <div class="divider"></div>
            <p class="text-center">
                {{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a>
            </p>
        @endif
    </section>
@endsection
