@props(['variant', 'disabled' => false])

@php
$classes = '';

if ($disabled) {
    $classes = ' cursor-not-allowed bg-gray-50 text-gray-200';
} else {
    $classes = ' cursor-pointer bg-white text-gray-900 shadow-sm';
}

@endphp

<label :class="{'ring-2 ring-primary-500': selectedVariant === '{{ $variant }}', '': selectedVariant !== '{{ $variant }}'}" {{ $attributes->merge(['class' => 'group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6' . $classes]) }}>
    <input type="radio" name="size-choice" wire:model="variant" value="{{ $variant }}" @if($disabled) disabled @endif class="sr-only" x-model="selectedVariant">
    <span id="size-choice-2-label">{{ $slot }}</span>

    @if(!$disabled)
        <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
    @else
        <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
            <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
            </svg>
        </span>
    @endif
</label>
