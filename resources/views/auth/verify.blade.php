@extends('baconfy::layouts.auth')

@section('title', __('baconfy::guest.verify.title'))

@section('content')
    @if (session('resent'))
        <div class="alert alert-success" role="alert">
            {{ __('baconfy::guest.verify.alert') }}
        </div>
    @endif

    <p>{{ __('baconfy::guest.verify.welcome') }}</p>
    {{ __('baconfy::guest.verify.before') }}
    {{ __('baconfy::guest.verify.receive') }},
    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
        @csrf
        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('baconfy::guest.verify.request') }}</button>
        .
    </form>
@endsection