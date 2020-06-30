@extends('ui::layouts.auth')

@section('title', __('ui::auth.login.title'))
@section('welcome', __('ui::auth.login.welcome'))

@section('content')
    <section>
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="form-group">
                <label class="form-label" for="email">{{ __('ui::auth.login.email') }}</label>
                <input id="email" type="email" name="email" class="form-control" value="testete@teste.vom" required autocomplete="email" autofocus/>
                @error('email')
                <div class="valid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-group">
                <label class="form-label" for="password">{{ __('ui::auth.login.password') }}</label>
                <input id="password" type="password" name="password" class="form-control" required/>
                @error('password')
                <div class="valid-feedback">{{ $message }}</div>@enderror
            </div>

            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="form-check-label" for="remember">{{ __('ui::auth.login.remember-password') }}</label>
            </div>

            <button class="btn btn-block btn-primary" type="submit">{{ __('ui::auth.login.action') }}</button>
        </form>
    </section>

    @if (Route::has('password.request'))
        <section class="text-center">
            <div class="divider"></div>

            <a class="d-block" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>

            @if (Route::has('register'))
                {!! __('ui::auth.login.register-here', ['register' => route('register')])  !!}
            @endif
        </section>
    @endif

    @if (1 or Route::has('social-login'))
        <section>
            <div class="divider dot"></div>
            <p class="text-center">or login with</p>

            <div class="d-flex">
                <a href="#" class="btn btn-facebook flex-grow-1 mr-1"><i class="fab fa-facebook-f mr-2"></i> Facebook</a>
                <a href="#" class="btn btn-google flex-grow-1 ml-1"><i class="fab fa-google mr-2"></i> Google</a>
            </div>
        </section>
    @endif
@endsection
