<div {{ $attributes->class(['group relative text-base sm:text-sm']) }}>
    <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
        {{ $image }}
    </div>

    {{ $slot }}
    <p aria-hidden="true" class="mt-1">Shop now</p>
</div>
