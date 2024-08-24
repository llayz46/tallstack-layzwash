@props([
    /** @var \mixed */
    'menu'
])

<button type="button" :class="{ 'border-primary-500 text-primary-500': {{ $menu }}, 'border-transparent text-gray-700 hover:text-gray-800': !{{ $menu }} }"
        {{ $attributes->class(['relative z-10 -mb-px flex items-center border-b-2 pt-px text-sm font-medium transition-colors duration-200 ease-out']) }}
        aria-expanded="false" @mouseover="{{ $menu }} = true">{{ $slot }}
</button>
