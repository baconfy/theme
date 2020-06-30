@extends('ui::layouts.auth')

@section('title', __('ui::auth.reset.title'))
@section('welcome', __('ui::auth.reset.welcome'))

@section('content')
    <section class="mt-1">
        <form class="form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="input @error('email') border-red-500 @enderror">
                <label class="@error('email') text-red-500 @enderror" for="email">{{ __('ui::auth.login.email') }}</label>
                <input id="email" type="email" class="@error('email') border-red-500 @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"/>
                @error('email')<p>{{ $message }}</p>@enderror
            </div>

            <div class="input @error('password') border-red-500 @enderror">
                <label class="@error('password') text-red-500 @enderror" for="password">{{ __('ui::auth.reset.password') }}</label>
                <input id="password" type="password" class="@error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                @error('password')<p>{{ $message }}</p>@enderror
            </div>

            <div class="input @error('password_confirmation') border-red-500 @enderror">
                <label class="@error('password_confirmation') text-red-500 @enderror" for="password">{{ __('ui::auth.register.confirm') }}</label>
                <input id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password">
                @error('password_confirmation')<p>{{ $message }}</p>@enderror
            </div>

            <button class="block w-full rounded bg-primary text-white p-3 mt-4 mb-8" type="submit">{{ __('ui::auth.reset.action') }}</button>
        </form>

        <div class="divider"></div>

        <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
            {{ __('ui::auth.register.already-account') }} <a class="text-blue-500 hover:text-blue-700 no-underline" href="{{ route('login') }}">{{ __('ui::auth.register.back-action') }}</a>
        </p>
    </section>
@endsection
