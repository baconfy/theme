@extends('baconfy::layouts.auth')

@section('title', __('baconfy::guest.sign-in'))

@section('content')
    <p>{{ __('baconfy::guest.welcome.login') }}</p>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-label-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('baconfy::guest.email') }}" required autofocus>
            <label for="email">{{ __('baconfy::guest.email') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('baconfy::guest.password') }}" required/>
            <label for="password">{{ __('baconfy::guest.password') }}</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
            <label class="custom-control-label" for="remember">{{ __('baconfy::guest.remember-password') }}</label>
        </div>

        <button class="btn btn-primary btn-block btn-login mb-2" type="submit">{{ __('baconfy::guest.sign-in') }}</button>

        @if (Route::has('password.request'))
            <div class="text-center"><a class="small" href="{{ route('password.request') }}">{{ __('baconfy::guest.forgot-password') }}</a></div>
        @endif

        @if (Route::has('register'))
            <div class="text-center"><a class="small" href="{{ route('register') }}">{{ __('baconfy::guest.new-account') }}</a></div>
        @endif
    </form>
@endsection
