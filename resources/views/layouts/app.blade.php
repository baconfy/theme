<x-empty-layout class="flex h-screen" page-title="{{ $attributes['page-title'] }}">
    <input type="checkbox" class="hidden" id="by-notifications-toggle" />
    <input type="checkbox" class="hidden" id="by-navigation-toggle" />

    <x-navigation></x-navigation>

    {{ $slot }}
</x-empty-layout>