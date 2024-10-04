<div {{ $attributes->merge(['class' => 'absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-2 dark:bg-gray-700']) }}>
    <div class="p-3 pb-0 text-gray-900 md:pb-3 dark:text-white">
        <ul class="space-y-3 p-1" aria-labelledby="{{ $attributes['aria-labelledby'] }}">
            {{ $slot }}
        </ul>
    </div>
</div>
