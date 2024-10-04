<button {{ $attributes->merge(
    [
        'id' => 'mega-menu-toggle',
        'data-collapse-toggle' => 'mega-menu',
        'type' => 'button',
        'class' => 'inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600',
        'aria-controls' => 'mega-menu',
        'aria-expanded' => 'false'
    ]) }}>
    <span class="sr-only">Menu</span>
    <svg id="mega-menu-open-icon" class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
    </svg>
    <svg id="mega-menu-close-icon" class="hidden w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
    </svg>
</button>
