@extends('baconfy::layouts.auth')

@section('title', __('Sign In'))

@section('content')
    <p>Welcome back! Please signin to continue.</p>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-label-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('e-mail address') }}" required autofocus>
            <label for="email">{{ __('e-mail address') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="{{ __('password') }}" required/>
            <label for="password">{{ __('password') }}</label>
        </div>

        <div class="custom-control custom-checkbox mb-3">
            <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
            <label class="custom-control-label" for="remember">{{ __('Remember Password') }}</label>
        </div>

        <button class="btn btn-primary btn-block btn-login mb-2" type="submit">{{ __('Sign in') }}</button>

        @if (Route::has('password.request'))
            <div class="text-center"><a class="small" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></div>
        @endif
    </form>
@endsection
