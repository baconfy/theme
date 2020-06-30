@extends('ui::layouts.auth')

@section('title', __('ui::auth.verify.title'))
@section('welcome', __('ui::auth.verify.welcome'))

@section('content')
    <section class="mt-1">
        @if (session('resent'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100  px-3 py-4 mb-4" role="alert">
                {{ __('ui::auth.verify.alert') }}
            </div>
        @endif

        <p class="leading-normal mt-10">
            {{ __('ui::auth.verify.before') }}
        </p>

        <p class="leading-normal mt-6">
            {{ __('ui::auth.verify.receive') }}, <a class="text-primary hover:text-blue-700 no-underline" onclick="event.preventDefault(); document.getElementById('resend-verification-form').submit();">{{ __('ui::auth.verify.request') }}</a>.
        </p>

        <form id="resend-verification-form" method="POST" action="{{ route('verification.resend') }}" class="hidden">
            @csrf
        </form>
    </section>
@endsection
