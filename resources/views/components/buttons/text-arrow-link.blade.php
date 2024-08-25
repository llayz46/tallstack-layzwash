<a {{ $attributes->class(['text-sm font-medium text-primary-600 hover:text-primary-500']) }} wire:navigate>
    {{ $slot }}
    <span aria-hidden="true"> &rarr;</span>
</a>
