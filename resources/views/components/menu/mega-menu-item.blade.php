@props(['active' => false])

@php
$classes = ($active ?? false)
            ? 'text-blue-700 dark:text-blue-400 hover:text-blue-600 dark:hover:text-blue-500'
            : 'text-gray-600 dark:text-white hover:text-blue-600 dark:hover:text-blue-400';

$aria_current = ($active ?? false)
            ? 'page'
            : '';
@endphp

<li>
    <a href="{{ $attributes['href'] }}" {{ $attributes->merge(
        [
            'class' => $classes,
            ' aria-current' => $aria_current
        ]) }}>
        {{ $slot }}
    </a>
</li>
