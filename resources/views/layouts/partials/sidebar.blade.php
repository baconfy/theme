<div class="flex justify-between items-center">
    <img src="{{ config('ui.brand-icon') }}" class="w-10 h-10" />

    <label for="by-navigation-toggle" class="cursor-pointer lg:hidden">
        <svg class="w-6 h-6" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </label>
</div>

<div class="mt-10">
    <fieldset class="mb-10">
        <legend class="text-xxs uppercase tracking-widest font-bold text-gray-400">Navigation</legend>

        <ul class="mt-3 ml-3 text-sm font-semibold text-gray-500">
            <li class="rounded bg-gray-200 py-3 px-4"><a href="#"><i class="fas fa-shopping-cart mr-2"></i> Dashboard</a></li>
            <li class="p-2"><a href="#"><i class="fas fa-stream mr-2"></i> My Activity</a></li>
        </ul>
    </fieldset>

    <fieldset class="mb-10">
        <legend class="text-xxs uppercase tracking-widest font-bold text-gray-400">Settings</legend>

        <ul class="mt-3 ml-3 text-sm font-semibold text-gray-500">
            <li class="p-2"><a href="#"><i class="fas fa-th-large mr-2"></i> Widgets</a></li>
            <li class="p-2"><a href="#"><i class="fab fa-sourcetree mr-2"></i> Data Sources</a></li>
            <li class="p-2"><a href="#"><i class="fas fa-share-alt mr-2"></i> Share Dashboard</a></li>
            <li class="p-2"><a href="#"><i class="fas fa-globe-americas mr-2"></i> Location & Timezone</a></li>
        </ul>
    </fieldset>
</div>


<div class="px-6 py-4">
    <a class="block flex lowercase" href="{{ route('logout') }}" title="{{ __('ui::navigation.logout') }}">
        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>

        <span>Sign out</span>
    </a>
</div>

