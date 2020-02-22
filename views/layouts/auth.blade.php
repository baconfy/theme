@extends('ui::layouts.empty', ['class' => 'auth'])

@section('page')
<div class="container-fluid">
    <div class="row no-gutter">
        <div class="d-none d-md-flex d-lg-flex d-xl-flex align-content-end flex-wrap col-md-6 col-lg-8 image" style="background-image: url('{{ config('ui.guest.background') }}')">
            <div class="slogan">{{ config('ui.guest.text') }}</div>
        </div>

        <div class="col-md-6 col-lg-4">
            <div class="content d-flex align-items-center py-5">
                <div class="container">
                    <div class="row pb-5">
                        <div class="col-md-9 col-lg-8 mx-auto">
                            <div class="logo">
                                <img src="{{ config('ui.logo') }}"/>
                                <h1>{{ config('app.name') }}</h1>
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