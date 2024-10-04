<x-layout>

    <div class="space-y-10 mt-10 mb-10 mx-auto dark:bg-gray-900">

        <section>

            <x-section-heading class="text-gray-900 dark:text-white">Featured Jobs</x-section-heading>
            <div class="grid grid-cols-1 gap-8 sm:grid-cols-1 md:grid-col-2 lg:grid-cols-2 xl:grid-cols-3">
                <x-job-card class="bg-white dark:bg-gray-800" />
                <x-job-card class="bg-white dark:bg-gray-800" />
                <x-job-card class="bg-white dark:bg-gray-800" />
            </div>

        </section>

        <section>

            <x-section-heading class="text-gray-900 dark:text-white">Tags</x-section-heading>

        </section>

        <section>
            <x-section-heading class="text-gray-900 dark:text-white">Filter</x-section-heading>

        </section>

        <section>

            <div class="flex-inline items-center justify-between mt-auto">
                <div class="grid grid-cols-12 gap-8">

                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-7 xl:col-span-8">

                        <x-section-heading class="text-gray-900 dark:text-white">Latest Jobs</x-section-heading>
                        <div class="grid grid-cols-1 gap-5">
                            <x-job-card-wide class="bg-white dark:bg-gray-800" />
                            <x-job-card-wide class="bg-white dark:bg-gray-800" />
                            <x-job-card-wide class="bg-white dark:bg-gray-800" />
                        </div>

                    </div>

                    <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-5 xl:col-span-4">

                        <x-section-heading class="text-gray-900 dark:text-white">Widget 1</x-section-heading>
                        <div class="grid grid-cols-1 gap-5">
                            <x-job-card-wide class="bg-white dark:bg-gray-800" />
                        </div>

                        <x-section-heading class="text-gray-900 dark:text-white">Widget 2</x-section-heading>
                        <div class="grid grid-cols-1 gap-5">
                            <x-job-card-wide class="bg-white dark:bg-gray-800" />
                        </div>
                    </div>

                </div>
            </div>

        </section>

    </div>

</x-layout>
