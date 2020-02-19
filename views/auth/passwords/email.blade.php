@extends('ui::layouts.auth')

@section('title', __('baconfy::guest.passwords.title'))

@section('content')
    <p>{{ __('baconfy::guest.passwords.welcome') }}</p>

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <div class="form-label-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('baconfy::guest.login.email') }}" required autofocus>
            <label for="email">{{ __('baconfy::guest.login.email') }}</label>
        </div>

        <button class="btn btn-primary btn-block btn-login mb-2" type="submit">{{ __('baconfy::guest.passwords.send') }}</button>

        @if (Route::has('login'))
            <div class="text-center"><a class="small" href="{{ route('login') }}">{{ __('baconfy::guest.register.already-account') }}</a></div>
        @endif
    </form>
@endsection