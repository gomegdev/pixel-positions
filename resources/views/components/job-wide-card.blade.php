
    <x-panel class="mt-5 flex flex-col justify-between md:flex-row">
        <div class="flex gap-6">
            <x-employer-logo />
            <div class="text-xl flex flex-col">
                <h2 class="text-sm font-light capitalize mb-2 text-white/60">Company name</h2>
                <h3 class="font-bold group-hover:text-blue-800 transition-colors duration-300">Full stack Laravel Developer</h3>
                <p class="mt-auto text-xs text-white/60">Full time - From $60,000</p>
            </div>
        </div>

        <div class="flex flex-col justify-between gap-2 md:items-end">
            <div class="flex gap-4">
                <span class="text-xs border border-white/10 rounded-xl px-2 py-1 hover:bg-white/25 transition-colors duration-300">Remote</span>
                <span class="text-xs border border-white/10 rounded-xl px-2 py-1 hover:bg-white/25 transition-colors duration-300">22hr</span>
            </div>
            <div class="space-x-2">
                <x-tag fontSize="text-xs">tag</x-tag>
                <x-tag fontSize="text-xs">tag</x-tag>
                <x-tag fontSize="text-xs">tag</x-tag>
            </div>
        </div>
    </x-panel>
