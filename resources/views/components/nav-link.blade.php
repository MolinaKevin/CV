@props(['active'])

@php
$classes = ($active ?? false)
            ? 'mr-5 hover:text-gray-900 hover:border-b-2 hover:border-red-700 leading-5 focus:outline-none hover:border-b-2 focus:border-red-700 transition duration-150 ease-in-out'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
