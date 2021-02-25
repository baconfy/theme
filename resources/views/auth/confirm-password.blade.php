<x-empty-layout class="flex justify-center h-screen">

    <div class="px-10 lg:px-20 pb-16 m-auto">
        <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10 mb-10" />

        <h1 class="font-serif leading-tight text-gray-600 text-4xl">{{ __('ui::auth.confirm.title') }}</h1>
        <h2 class="mt-2 mb-7 text-sm text-gray-400">{{ __('ui::auth.confirm.welcome') }}</h2>

        <form method="POST" action="{{ route('password.confirm') }}">
            @csrf
            <x-input type="password" name="password" :label="__('ui::auth.login.password')" required/>

            <div class="flex items-center justify-between">
                <x-button :label="__('ui::auth.confirm.action')" />
                <x-href href="{{ url()->previous() }}" class="text-xxs uppercase text-gray-600 hover:text-gray-900">{{ __('ui::auth.confirm.back') }}</x-href>
            </div>
        </form>
    </div>

</x-empty-layout>
