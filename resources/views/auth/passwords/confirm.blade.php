@extends('ui::layouts.auth')

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('content')
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

    @if (Route::has('password.request'))
        <div class="divider"></div>
        <a class="d-block text-center" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>
    @endif
@endsection
