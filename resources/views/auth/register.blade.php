@extends('baconfy::layouts.auth')

@section('title', __('baconfy::guest.register'))

@section('content')
    <p>{{ __('baconfy::guest.welcome.register') }}</p>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-label-group">
            <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('baconfy::guest.name') }}" required autofocus>
            <label for="email">{{ __('baconfy::guest.name') }}</label>
        </div>

        <div class="form-label-group">
            <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{ __('baconfy::guest.email') }}" required autofocus>
            <label for="email">{{ __('baconfy::guest.email') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{ __('baconfy::guest.password') }}" required/>
            <label for="password">{{ __('baconfy::guest.password') }}</label>
        </div>

        <div class="form-label-group">
            <input type="password" id="password-confirm" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="{{ __('baconfy::guest.confirm-password') }}" required/>
            <label for="password-confirm">{{ __('baconfy::guest.confirm-password') }}</label>
        </div>


        <button class="btn btn-primary btn-block btn-login mb-2" type="submit">{{ __('baconfy::guest.register') }}</button>

        @if (Route::has('login'))
            <div class="text-center"><a class="small" href="{{ route('login') }}">{{ __('baconfy::guest.already-account') }}</a></div>
        @endif
    </form>
@endsection
