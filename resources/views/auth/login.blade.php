@extends('ui::layouts.auth')

@section('title', __('ui::auth.login.title'))
@section('welcome', __('ui::auth.login.welcome'))

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.email') }}</span>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" placeholder="email@domain.com" required autofocus />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.password') }}</span>
            <input type="password" name="password" class="form-input" required />
        </label>

        <div class="flex items-center justify-between">
            <label class="checkbox-label" for="remember">
                <input type="checkbox" name="remember" id="remember" class="form-checkbox" {{ old('remember') ? 'checked' : '' }} />
                <span>{{ __('ui::auth.login.remember-password') }}</span>
            </label>

            @if (Route::has('password.request'))
                <a class="form-label" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>
            @endif
        </div>

        <button class="btn btn-primary mt-7" type="submit">{{ __('ui::auth.login.action') }}</button>
    </form>

    @if (Route::has('register'))
        <p class="mt-10 text-center text-sm">{!! __('ui::auth.login.register-here', ['register' => route('register')])  !!}</p>
    @endif
@endsection
