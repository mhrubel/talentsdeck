@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'block py-2 px-3 text-blue-600 text-bold border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-blue-500 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-700 md:dark:hover:bg-transparent dark:border-gray-700'
            : 'block py-2 px-3 text-gray-900 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700';

$aria_current = ($active ?? false)
            ? 'page'
            : '';
@endphp

<li>
    <a href="{{ $attributes['href'] }}" {{ $attributes->merge(
        [
            'class' => $classes,
            'aria-current' => $aria_current
        ]) }}>
        {{ $slot }}
    </a>
</li>
