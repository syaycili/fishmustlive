<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">

        <x-jet-banner />

        <div class="min-h-screen bg-gray-200">

            <div class="max-w-7xl mx-auto p-5 px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">

                <div class="flex">
                <x-jet-application-logo/>
                </div>

                <div class="flex">
                <button type="button" onclick="history.back()" class="text-white bg-gray-800 hover:bg-gray-900 focus:ring-5 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-1 text-center mr-2 mb-6 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-800 dark:border-gray-700">Geri Dön</button>
                </div>

            </div>
        </div>
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
