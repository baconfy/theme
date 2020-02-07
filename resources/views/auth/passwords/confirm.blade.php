@extends('baconfy::layouts.auth')

@section('title', __('baconfy::guest.confirm-password.title'))

@section('content')
    <p>{{ __('baconfy::guest.confirm-password.welcome') }}</p>

    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('baconfy::guest.login.password') }}" required autofocus />
            <label for="password">{{ __('baconfy::guest.login.password') }}</label>
        </div>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <button type="submit" class="btn btn-primary btn-block btn-login mb-2">
            {{ __('baconfy::guest.confirm-password.title') }}
        </button>

        @if (Route::has('password.request'))
            <div class="text-center"><a class="small" href="{{ route('password.request') }}">{{ __('baconfy::guest.login.forgot-password') }}</a></div>
        @endif
    </form>
@endsection
