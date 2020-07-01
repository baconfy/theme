@extends('ui::layouts.auth')

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('content')
    <section>
        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="form-group">
                <label class="form-label" for="password">{{ __('ui::auth.login.password') }}</label>
                <input id="password" type="password" class="form-control" name="password" required/>
                @error('password')
                <div class="valid-feedback">{{ $message }}</div>@enderror
            </div>

            <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.confirm.action') }}</button>
        </form>

        <div class="divider"></div>

        @if (Route::has('password.request'))
            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                <a class="text-primary whitespace-no-wrap no-underline" href="{{ route('password.request') }}">
                    {{ __('ui::auth.login.forgot-password') }}
                </a>
            </p>
        @endif
    </section>
@endsection
