<div {{ $attributes }}>
    <p id="{{ $slot }}-heading" class="font-medium text-gray-900">{{ $slot }}</p>
    <ul role="list" aria-labelledby="{{ $slot }}-heading"
        class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
        {{ $content }}
    </ul>
</div>
