@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'bg-green-50 text-green-600 p-5 mb-10']) }}>
        {{ $status }}
    </div>
@endif
