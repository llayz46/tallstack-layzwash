@props(['active' => false])

@php
    $classes = 'text-sm font-medium text-gray-700 hover:text-gray-800';
    if ($active) {
        $classes = 'text-sm font-medium text-primary-500 hover:text-primary-400';
    }
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} wire:navigate>{{ $slot }}</a>
