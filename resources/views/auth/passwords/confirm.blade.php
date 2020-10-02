@extends('ui::layouts.empty', ['class' => 'flex h-screen justify-center'])

@section('title', __('ui::auth.confirm.title'))
@section('welcome', __('ui::auth.confirm.welcome'))

@section('page')
    <div class="flex flex-col justify-between w-full lg:w-1/3">
        <header class="p-4">
            <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10" />
        </header>

        <main class="px-10 lg:px-20">
            <h1 class="font-serif leading-tight text-4xl">@yield('title')</h1>
            <h2 class="mt-3 mb-15 text-sm text-gray-400">@yield('welcome')</h2>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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
        </main>

        <footer class="flex flex-col lg:flex-row items-center justify-end py-1 px-2 mt-20">
            <div class="leading-tight text-xs tracking-wide text-gray-500">©{{ date('Y') }} - All Rights Reserved</div>
        </footer>
    </div>
@endsection
