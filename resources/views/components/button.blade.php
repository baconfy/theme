<button {{ $attributes->merge(['type' => 'submit', 'class' => 'text-center px-4 py-2 bg-primary border border-transparent font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    @if ($attributes->has('label'))
        {{ __($attributes['label']) }}
    @else
        {{ $slot }}
    @endif
</button>