@props(['disabled' => false])

<x-form-element label="{{ $attributes['label'] }}">
    <input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'rounded-none w-full text-sm text-gray-500 border p-3 mt-1 mb-4 focus:ring-0 focus:border-primary focus:ring-gray-700']) !!} />
</x-form-element>