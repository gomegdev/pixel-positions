<x-layout>

<div class="flex flex-col gap-12">
    <section class="pt-6">
            <div class="text-center space-y-8 pb-6">
                <h1 class="text-4xl font-semibold capitalize">Let's find your next job</h1>
                <form action="">
                    <div class="flex justify-between items-center gap-2 text-sm font-light
                     border border-white/5 bg-white/5 text-white/10
                     rounded-xl px-4 py-2 max-w-lg mx-auto ring ring-transparent hover:ring-blue-800 transition duration-300 focus:ring-blue-800">
                        <input type="text" placeholder="I'm looking for..." class="bg-transparent outline-none text-white/80 w-full" />
                        <span class="size-3 bg-white inline-block"></span>
                    </div>
                </form>
            </div>
    </section>

    <section class="pt-10">
        <x-section-heading>
            Featured Jobs
        </x-section-heading>

        <div class="mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <x-job-card />
            <x-job-card />
            <x-job-card />
        </div>
    </section>

    <section>
        <x-section-heading>
            Tags
        </x-section-heading>
        <div class="mt-5 space-x-2">
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
            <x-tag>Tag</x-tag>
        </div>
    </section>

    <section>
        <x-section-heading>
            Find Jobs
        </x-section-heading>

        <x-job-wide-card />
        <x-job-wide-card />
        <x-job-wide-card />
    </section>
</div>

</x-layout>
