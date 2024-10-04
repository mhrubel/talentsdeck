<div {{ $attributes->merge(
    [
        'id' => 'mega-menu',
        'class' => 'items-center justify-between hidden w-full md:flex md:w-auto md:order-1'
    ]) }}>
    <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
        <x-menu.menu-item href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-menu.menu-item>
        <x-menu.menu-item href="{{ route('jobs') }}" :active="request()->routeIs('jobs')">Jobs</x-menu.menu-item>
        <x-menu.menu-item href="{{ route('home') }}/services">Services</x-menu.menu-item>
        <x-menu.menu-item href="{{ route('home') }}/employers">Employers</x-menu.menu-item>
        <x-menu.menu-item href="{{ route('home') }}/resumes">Resumes</x-menu.menu-item>
        <x-menu.menu-item href="{{ route('home') }}/blog">Blog</x-menu.menu-item>
        <li>
            <x-menu.mega-menu-dropdown-button id="more-dropdown-button" data-dropdown-toggle="more-dropdown">
                More
            </x-menu.dropdown-button>
            <x-menu.mega-menu-dropdown-content id="more-dropdown" aria-labelledby="more-dropdown-button">
                <x-slot name="column1">
                    <x-menu.mega-menu-item href="{{ route('home') }}/contact">Contact Us</x-menu.menu-item>
                    <x-menu.mega-menu-item href="{{ route('home') }}/contact">Contact Us</x-menu.menu-item>
                </x-slot>
                <x-slot name="column2">
                    <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.menu-item>
                    <x-menu.mega-menu-item href="{{ route('home') }}/terms">Terms & Conditions</x-menu.menu-item>
                </x-slot>
                <x-slot name="column3">
                    <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.menu-item>
                    <x-menu.mega-menu-item href="{{ route('home') }}/terms">Terms & Conditions</x-menu.menu-item>
                </x-slot>
            </x-menu.mega-menu-content>
        </li>
    </ul>
</div>
