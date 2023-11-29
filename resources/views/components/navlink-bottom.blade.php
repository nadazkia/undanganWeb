@props(['active'])

@php
$class = ($active ?? false)
? 'flex justify-center py-3 hover:text-mermud-800 duration-500 text-mermud-800'
: 'flex justify-center py-3 hover:text-mermud-800 duration-500 text-gray-700';
@endphp

<li {{ $attributes->merge(['class' => $class]) }}">
    {{ $slot }}
</li>
