@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-5 text-paleta-primario px-1 pt-1 border-b-2 border-transparent hover:text-theme-hover hover:border-b-2 hover:border-paleta-secundario leading-5 focus:outline-none focus:border-b-2 focus:border-paleta-secundario transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-paleta-secundario hover:border-b-2 hover:text-theme-hover hover:border-theme-hover focus:outline-none focus:text-theme-hover focus:border-theme-hover transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
