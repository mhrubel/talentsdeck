<div {{ $attributes->merge(['class' => 'items-center justify-between hidden w-full md:flex md:w-auto md:order-1']) }}>
    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
        <ul class="space-y-4">
            {{ $column1 ?? '' }}
        </ul>
    </div>
    <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
        <ul class="space-y-4">
            {{ $column2 ?? '' }}
        </ul>
    </div>
</div>

