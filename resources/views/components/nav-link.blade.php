@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-5 text-paleta-secundario px-1 pt-1 border-b-2 border-paleta-secundario hover:text-paleta-primario hover:border-b-2 hover:border-paleta-primario leading-5 focus:outline-none focus:border-b-2 focus:border-paleta-secundario transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-paleta-secundario hover:text-paleta-primario focus:outline-none focus:text-theme-hover focus:border-theme-hover transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
