@extends('ui::layouts.auth')

@section('title', __('ui::auth.register.title'))
@section('welcome', __('ui::auth.register.welcome'))

@section('content')
    <form class="form" method="POST" action="{{ route('register') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.register.name') }}</span>
            <input type="text" name="name" class="form-input" value="{{ old('name') }}" required autofocus />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.email') }}</span>
            <input type="email" name="email" class="form-input" value="{{ old('email') }}" required />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.password') }}</span>
            <input type="password" name="password" class="form-input" required />
        </label>

        <label class="block">
            <span class="form-label">{{ __('ui::auth.register.confirm') }}</span>
            <input type="password" name="password_confirmation" class="form-input" required />
        </label>

        <div class="flex justify-between">
            <label class="checkbox-label" for="agreement">
                <input type="checkbox" name="agreement" id="agreement" class="form-checkbox" />
                <span>{!! __('ui::auth.register.agreement') !!}</span>
            </label>
        </div>

        <button class="btn btn-primary mt-7" type="submit">{{ __('ui::auth.register.action') }}</button>
    </form>

    <p class="mt-10 text-center text-sm">{{ __('ui::auth.register.already-account') }} <a href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a></p>
@endsection
