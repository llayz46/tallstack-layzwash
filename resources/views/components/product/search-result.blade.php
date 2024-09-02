@props(['href'])

<li {{ $attributes->class(['cursor-default select-none hover:bg-gray-50']) }} role="option">
    <a href="{{ $href }}" class="w-full flex px-4 py-2" wire:navigate>{{ $slot }}</a>
</li>
