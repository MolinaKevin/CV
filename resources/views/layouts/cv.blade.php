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

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/28bc186263.js" crossorigin="anonymous"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="h-screen bg-gray-100 flex flex-col">
            <header class="text-gray-600 body-font flex-1 flex-initial">
                @livewire('navigation-menu')
            </header>
            <!-- Page Content -->
            <section class="h-full w-full container mx-auto flex items-center justify-center flex-col flex-1">
                {{ $slot }}
            </section>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
