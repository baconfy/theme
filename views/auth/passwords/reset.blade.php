@extends('ui::layouts.auth')

@section('title', __('baconfy::guest.passwords.title'))

@section('content')
    <p>{{ __('baconfy::guest.passwords.create-password') }}</p>

    <form method="POST" action="{{ route('password.update') }}">
        <input type="hidden" name="token" value="{{ $token }}">
        @csrf

        <div class="form-label-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('baconfy::guest.login.email') }}" value="{{ $email ?? old('email') }}" required >
            <label for="email">{{ __('baconfy::guest.login.email') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('baconfy::guest.login.password') }}" required autofocus />
            <label for="password">{{ __('baconfy::guest.login.password') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('baconfy::guest.passwords.confirmation') }}" required/>
            <label for="password-confirm">{{ __('baconfy::guest.passwords.confirmation') }}</label>
        </div>

        <button class="btn btn-primary btn-block btn-login mb-2" type="submit">{{ __('baconfy::guest.passwords.title') }}</button>

        @if (Route::has('login'))
            <div class="text-center"><a class="small" href="{{ route('login') }}">{{ __('baconfy::guest.register.already-account') }}</a></div>
        @endif
    </form>
@endsection