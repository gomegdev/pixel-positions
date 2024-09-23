<x-layout>

    <div class="flex flex-col gap-12">
        <section class="pt-6">
                <div class="text-center space-y-8 pb-6">
                    <h1 class="text-4xl font-semibold capitalize">Let's find your next job</h1>

                    <x-forms.form action="/search" class="mt-6">
                        <x-forms.input :label="false" name="q" placeholder="Web Developer..." />
                    </x-forms.form>
                </div>
        </section>

        <section class="pt-10">
            <x-section-heading>
                Featured Jobs
            </x-section-heading>

            <div class="mt-5 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($featuredJobs as $job )
                <x-job-card :$job />
                @endforeach
            </div>
        </section>

        <section>
            <x-section-heading>
                Tags
            </x-section-heading>
            <div class="mt-5 space-x-2">

                @foreach($tags as $tag)
                <x-tag :$tag />
                @endforeach

            </div>
        </section>

        <section>
            <x-section-heading>
                Find Jobs
            </x-section-heading>

           <div class="space-y-4 mt-6">
                @foreach ($jobs as $job)
                <x-job-wide-card :$job />
                @endforeach
           </div>

        </section>
    </div>

    </x-layout>
