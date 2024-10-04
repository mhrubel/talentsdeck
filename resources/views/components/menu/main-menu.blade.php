<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap items-center justify-between max-w-screen-xl mx-auto p-4">
        <x-menu.menu-logo />

        <div class="flex items-center md:order-2 space-x-1 md:space-x-2 rtl:space-x-reverse">
            <x-menu.theme-toggle />

            <a href="{{ route('login') }}" class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">Login</a>
            <a href="{{ route('register') }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 md:px-5 md:py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Sign up</a>

            <x-menu.mobile-menu-toggle />
        </div>
        <div id="mega-menu" class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1">
            <ul class="flex flex-col mt-4 font-medium md:flex-row md:mt-0 md:space-x-8 rtl:space-x-reverse">
                <x-menu.menu-item href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-menu.menu-item>
                <x-menu.menu-item href="{{ route('jobs') }}" :active="request()->routeIs('jobs')">Jobs</x-menu.menu-item>
                <x-menu.menu-item href="{{ route('home') }}/services">Services</x-menu.menu-item>
                <x-menu.menu-item href="{{ route('home') }}/employers">Employers</x-menu.menu-item>
                <x-menu.menu-item href="{{ route('home') }}/resumes">Resumes</x-menu.menu-item>
                <x-menu.menu-item href="{{ route('home') }}/blog">Blog</x-menu.menu-item>
                <li>
                    <x-menu.mega-menu-dropdown-button data-dropdown-toggle="mega-menu-dropdown">
                        Company
                    </x-menu.mega-menu-dropdown-button>
                    <div id="mega-menu-dropdown" class="absolute z-10 grid hidden w-auto grid-cols-2 text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700">
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <x-menu.mega-menu-item href="{{ route('home') }}/about" active>About Us</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/contact">Contact Us</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/about">About Us</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/terms">Terms & Conditions</x-menu.mega-menu-item>
                            </ul>
                        </div>
                        <div class="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                            <ul class="space-y-4">
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                            </ul>
                        </div>
                        <div class="p-4">
                            <ul class="space-y-4">
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                                <x-menu.mega-menu-item href="{{ route('home') }}/privacy">Privacy Policy</x-menu.mega-menu-item>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
