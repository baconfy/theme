<div class="self-end p-8">
    <label for="by-modules-toggle" class="cursor-pointer">
        <svg class="w-8 h-8" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </label>
</div>

<div class="flex flex-wrap items-center justify-center overflow-auto w-full lg:w-1/2">
    @for($i=1; $i<=7; $i++)
        <a href="/dashboard" class="flex flex-col text-center hover:bg-gray-200 text-gray-500 rounded py-5 px-8">
            <i class="fas fa-globe-americas text-6xl"></i>
            <h2>Module</h2>
        </a>
    @endfor
</div>

<div class="p-4">
    <h4 class="text-gray-400">select your module</h4>
</div>
