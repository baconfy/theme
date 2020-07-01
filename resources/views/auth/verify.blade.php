@extends('ui::layouts.auth')

@section('title', __('ui::auth.verify.title'))
@section('welcome', __('ui::auth.verify.welcome'))

@section('content')
    @if (session('resent'))
        <div class="alert alert-success" role="alert">{{ __('ui::auth.verify.alert') }}</div>
    @endif

    <p>{{ __('ui::auth.verify.before') }}</p>
    <p>{{ __('ui::auth.verify.receive') }}, <a href="#" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('ui::auth.verify.request') }}</a>.</p>

    <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">@csrf</form>
@endsection
