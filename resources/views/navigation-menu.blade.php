<div x-data="{ open: false }" class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="{{ route('index') }}" class="flex title-font font-medium items-center text-theme-menu mb-4 md:mb-0">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-theme-menu rounded-full" viewBox="0 0 24 24">
        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
      </svg>
      <span class="ml-3 text-xl">Kevin Molina</span>
    </a>
    <nav class="hidden sm:inline md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400 flex flex-wrap items-center text-theme-menu justify-center">
        <!-- Navigation Links -->
        <x-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')">
            {{ __('Inicio') }}
        </x-nav-link>
        <x-nav-link href="{{ route('cart') }}" :active="request()->routeIs('cart')">
            {{ __('Busqueda Personalizada') }}
        </x-nav-link>
        <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">
            {{ __('Contact') }}
        </x-nav-link>
        <x-nav-link href="{{ route('timeline') }}" :active="request()->routeIs('timeline')">
            {{ __('Timeline') }}
        </x-nav-link>
    </nav>
    <!-- Hamburger -->
    <div class="-mr-2 flex items-center sm:hidden">
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
                {{ __('Contact') }}
            </x-jet-responsive-nav-link>
            <x-jet-responsive-nav-link href="{{ route('timeline') }}" :active="request()->routeIs('timeline')">
                {{ __('Timeline') }}
            </x-jet-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">

            </div>

        </div>
    </div>
</div>
