<x-user_navbar>
<x-slot name="body">
<div class="flex-auto">
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-flag-black mb-4 sm:mb-6">About Page</h1>
        <a href="/log_out">
        <button class="group relative inline-flex h-12 items-center justify-center overflow-hidden rounded-md bg-neutral-950 px-6 font-medium text-neutral-200 transition hover:scale-110"><span>Log out</span><div class="absolute inset-0 flex h-full w-full justify-center [transform:skew(-12deg)_translateX(-100%)] group-hover:duration-1000 group-hover:[transform:skew(-12deg)_translateX(100%)]"><div class="relative h-full w-8 bg-white/20"></div></div></button>
        </a>

        </div>
    </x-slot>
</x-user_navbar>