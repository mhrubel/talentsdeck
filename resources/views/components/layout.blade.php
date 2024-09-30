<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark:bg-gray-900">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="TalentsDeck">
    <meta name="author" content="TalentsDeck">
    <meta name="keywords" content="TalentsDeck">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta http-equiv="X-UA-Compatible" content="ie=edge; text/html; charset=utf-8">

    <title>TalentsDeck</title>

    @vite(['resources/css/app.css', 'resources/assets/css/style.css', 'resources/js/app.js', 'resources/assets/js/script.js'])

</head>

<body class="bg-white dark:bg-gray-900 text-gray-900 dark:text-white">

    <div>

        <x-main-menu />

    </div>


    <div>

        <main class="mt-10 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">

            {{ $slot }}

        </main>

    </div>

</body>

</html>
