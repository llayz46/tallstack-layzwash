<div {{ $attributes }}>
    <p id="{{ $slot }}-heading" class="font-medium text-gray-900">{{ $slot }}</p>
    <ul role="list" aria-labelledby="{{ $slot }}-heading"
        class="mt-6 flex flex-col space-y-6">
        {{ $content }}
    </ul>
</div>
