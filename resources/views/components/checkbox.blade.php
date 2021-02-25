@props(['disabled' => false, 'checked' => false])

<label class="flex focus:shadow-none hover:text-gray-500" for="{{ $attributes['name'] }}">
    <input type="checkbox" id="{{ $attributes['name'] }}" {!! $attributes->merge(['class' => 'mr-2 h-5 w-5 text-primary focus:shadow-none focus:ring-0']) !!} {{ $checked ? 'checked' : '' }} />
    <span class="flex items-center justify-center appearance-none block text-gray-400 text-xxs uppercase font-semibold tracking-wide hover:text-gray-500">{!! __($attributes['label']) !!}</span>
</label>