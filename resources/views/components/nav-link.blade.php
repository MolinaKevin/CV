@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-5 text-theme-hover hover:text-theme-hover hover:border-b-2 hover:border-theme-hover leading-5 focus:outline-none hover:border-b-2 focus:border-red-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-theme-menu hover:border-b-2 hover:text-theme-hover hover:border-theme-hover focus:outline-none focus:text-theme-hover focus:border-theme-hover transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
