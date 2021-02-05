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
        <script defer src="https://friconix.com/cdn/friconix.js"> </script>

        <!-- Font Awesome -->
        <script src="https://kit.fontawesome.com/28bc186263.js" crossorigin="anonymous"></script>

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <style>
            @keyframes fadeIn {


                0% {
                    opacity: 0;
                    /*transform:   perspective(2500px) rotateX(-100deg);*/
                    transform: translate3d(-100px, 0, 0);
                }
                100% {
                    opacity: 1;
                    /*transform:  perspective(0) rotateX(0deg);*/
                    transform: none;
                }
            }

            .animate-fadeIn {
                animation: fadeIn 0.6s  cubic-bezier(.250, .100, .250, 1) forwards;
            }


        </style>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-paleta-quinario ">
            <header class=" body-font ">
                @livewire('navigation-menu')
            </header>
            <!-- Page Content -->
            <section class="h-full w-full container mx-auto  items-center justify-center ">
                {{ $slot }}
            </section>
        </div>

        @stack('modals')

        @livewireScripts
        <script type="text/javascript">
            const callback = function (entries) {
              entries.forEach((entry) => {
                console.log(entry);

                if (entry.isIntersecting) {
                  entry.target.classList.add("animate-fadeIn");
                } else {
                  entry.target.classList.remove("animate-fadeIn");
                }
              });
            };

            const observer = new IntersectionObserver(callback);

            const targets = document.querySelectorAll(".js-show-on-scroll");
            targets.forEach(function (target) {
              target.classList.add("opacity-0");
              observer.observe(target);
            });
       </script>
    </body>
</html>
