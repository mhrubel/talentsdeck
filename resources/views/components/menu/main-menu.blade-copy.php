<nav class="p-4 bg-blue-100 dark:bg-gray-800 text-gray-900 dark:text-white">
    <div class="container mx-auto flex flex-wrap items-center justify-between">
        <x-menu.menu-logo />

        <div class="flex items-center space-x-4">
            <x-menu.dropdown-button id="new-dropdown-button" data-dropdown-toggle="new-dropdown">
                {{ __('New') }}
            </x-menu.dropdown-button>
            <x-menu.dropdown-button id="dashboard-dropdown-button" data-dropdown-toggle="dashboard-dropdown">
                {{ __('Dashboard') }}
            </x-menu.dropdown-button>
            <x-menu.theme-toggle />
            <x-menu.mobile-menu-toggle />
        </div>

    </div>

    <div id="mega-menu" class="hidden md:flex md:items-center md:justify-between w-full md:w-auto mt-4 md:mt-0">
        <x-menu.main-menu-items />
    </div>

    <div class="hidden absolute z-10 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5" id="new-dropdown" aria-labelledby="new-dropdown-button">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="new-dropdown-button">
            <x-menu.menu-item href="{{ route('jobs-create') }}">{{ __('Post a Job') }}</x-menu.menu-item>
            <x-menu.menu-item href="{{ route('home') }}/services/create">{{ __('Add a Service') }}</x-menu.menu-item>
            <x-menu.menu-item href="{{ route('home') }}/resumes/create">{{ __('Upload Resume') }}</x-menu.menu-item>
        </div>
    </div>

    <div class="hidden absolute z-10 mt-2 w-48 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5" id="dashboard-dropdown" aria-labelledby="dashboard-dropdown-button">
        <div class="py-1" role="menu" aria-orientation="vertical" aria-labelledby="dashboard-dropdown-button">
            <x-menu.menu-item href="{{ route('login') }}">{{ __('Log In') }}</x-menu.menu-item>
            <x-menu.menu-item href="{{ route('register') }}">{{ __('Create An Account') }}</x-menu.menu-item>
            <x-menu.menu-item href="{{ route('resetpassword') }}">{{ __('Reset Password') }}</x-menu.menu-item>
            <x-menu.menu-item href="{{ route('logout') }}">{{ __('Log Out') }}</x-menu.menu-item>
        </div>
    </div>

</nav>
