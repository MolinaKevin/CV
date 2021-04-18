<div x-data="{ open: false }" class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="{{ route('index') }}" class="flex title-font font-medium items-center text-paleta-secundario umb-4 md:mb-0">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-paleta-secundario rounded-full" viewBox="0 0 24 24">
            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <x-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')" class="ml-3 text-xl">
            Kevin Molina
        </x-nav-link>
    </a>
    <nav class="hidden sm:inline md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-paleta-secundario flex flex-wrap items-center text-paleta-primario justify-center">
        <!-- Navigation Links -->
        <x-nav-link href="{{ route('timeline') }}" :active="request()->routeIs('timeline')">
            {{ __('Linea de Tiempo') }}
        </x-nav-link>
        <x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
            {{ __('Busqueda Personalizada') }}
        </x-nav-link>
        <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
            {{ __('Contacto') }}
        </x-nav-link>
     </nav>
    <!-- Hamburger -->
    <div class="mt-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>


    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-jet-responsive-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')">
                {{ __('Inicio') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
                {{ __('Busqueda Personalizada') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
                {{ __('Contacto') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('timeline') }}" :active="request()->routeIs('timeline')">
                {{ __('Linea de Tiempo') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">

            </div>

        </div>
    </div>
    <div class="inline-flex">
        <a href="https://es.molinakev.in" class="inline-flex items-center bg-paleta-secundario border-0 py-1 px-3 focus:outline-none hover:bg-paleta-cuaternario rounded text-paleta-primario mt-4 mr-2 md:mt-0">
            ES
        </a>
        <a href="https://de.molinakev.in" class="inline-flex items-center bg-paleta-secundario border-0 py-1 px-3 focus:outline-none hover:bg-paleta-cuaternario rounded text-paleta-primario mt-4 md:mt-0">
            DE
        </a>
    </div>
</div>
