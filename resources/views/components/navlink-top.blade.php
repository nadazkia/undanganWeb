@props(['active'])

@php
$class = ($active ?? false)
? 'block mr-4 hover:text-mermud-900 duration-500 text-mermud-800'
: 'block mr-4 hover:text-mermud-900 duration-500';
@endphp

<a {{ $attributes->merge(['class' => $class]) }}>
    {{ $slot }}
</a>