<header class="flex justify-between items-center text-gray-500">
    <div>
        <label for="by-navigation-toggle" class="cursor-pointer lg:hidden">
            <svg class="w-7 h-7" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
            </svg>
        </label>
    </div>

    <div class="flex-auto mr-6">
        @yield('header')
    </div>

    <div class="flex items-center justify-between w-40">
        <button>
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
        </button>

        <label for="by-modules-toggle" class="cursor-pointer">
            <svg class="w-7 h-7"  fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path>
            </svg>
        </label>

        <button>
            <img class="w-10 h-10 rounded-full object-cover mr-2" src="https://api.adorable.io/avatars/144/{{ base64_encode(auth()->user()->email) }}" />
        </button>
    </div>
</header>
