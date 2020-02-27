@extends('ui::layouts.empty', ['class' => 'auth'])

@section('page')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex d-lg-flex d-xl-flex align-content-end flex-wrap col-md-6 col-lg-8 empty-space" style="background-image: url('{{ config('ui.guest.background') }}')">
            <div class="slogan">{{ config('ui.guest.text') }}</div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="content d-flex align-items-center">
                <div class="container-fluid">
                    <div class="row pb-5">
                        <div class="col">
                            <div class="logo">
                                <img src="{{ config('ui.brand-vertical') }}" class="img-fluid" />
                            </div>

                            <h3 class="content-heading mb-1">@yield('title')</h3>
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection