@extends('ui::layouts.auth')

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('content')
    <form method="POST" action="{{ route('password.confirm') }}">
        @csrf

        <label class="block">
            <span class="form-label">{{ __('ui::auth.login.password') }}</span>
            <input type="password" name="password" class="form-input mb-1" required/>

            @if (Route::has('password.request'))
                <a class="form-label text-right mb-6" href="{{ route('password.request') }}">{{ __('ui::auth.login.forgot-password') }}</a>
            @endif
        </label>

        <button class="btn btn-primary" type="submit">{{ __('ui::auth.confirm.action') }}</button>
    </form>

    <a href="{{ url()->previous() }}" class="block mt-10 text-center text-sm">{!! __('ui::auth.confirm.back')  !!}</a>
@endsection
