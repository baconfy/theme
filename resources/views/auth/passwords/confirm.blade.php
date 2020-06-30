@extends('ui::layouts.auth')

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('content')
    <section class="mt-1">
        <form class="form" method="POST" action="{{ route('password.confirm') }}">
            @csrf

            <div class="input @error('password') border-red-500 @enderror">
                <label class="@error('password') text-red-500 @enderror" for="password">{{ __('ui::auth.login.password') }}</label>
                <input id="password" type="password" class="@error('password') border-red-500 @enderror" name="password" required autocomplete="new-password">
                @error('password')<p>{{ $message }}</p>@enderror
            </div>

            <button class="block w-full rounded bg-primary text-white p-3 mt-4 mb-8" type="submit">{{ __('ui::auth.confirm.action') }}</button>
        </form>

        <div class="divider"></div>

        @if (Route::has('password.request'))
            <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                <a class="text-primary whitespace-no-wrap no-underline" href="{{ route('password.request') }}">
                    {{ __('ui::auth.login.forgot-password') }}
                </a>
            </p>
        @endif
    </section>
@endsection
