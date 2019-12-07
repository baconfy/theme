@extends('theme::layouts.auth')

@section('title', __('Welcome Back'))

@section('content')
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-mail Address') }}</label>
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" placeholder="{{ __('E-mail Address') }}" required autofocus/>
            @error('email')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required/>
            @error('password')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
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
