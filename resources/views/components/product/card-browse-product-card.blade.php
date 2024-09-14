@props(['product'])

<div {{ $attributes->class(['group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white']) }}>
    <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
        <img src="{{ $product->mainImage()->path }}"
             alt="Front of plain black t-shirt."
             class="h-full w-full object-cover object-center sm:h-full sm:w-full">
    </div>
    <div class="flex flex-1 flex-col space-y-2 p-4">
        <h3 class="text-sm font-medium text-gray-900">
            <a href="{{ route('product.show', $product->slug) }}" wire:navigate>
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $product->brand->name }} - {{ $product->name }}
            </a>
        </h3>
        <p class="text-sm text-gray-500">{{ Str::limit($product->description, 90, '...') }}</p>
        <div class="flex flex-1 flex-col justify-end">
            @if($product->variants->first()->capacity)
                <p class="text-sm italic text-gray-500">{{ $product->variants->count() }} {{ $product->variants->count() >= 2 ? 'capacities' : 'capacity' }}</p>
            @else
                <p class="text-sm italic text-gray-500">{{ $product->variants->count() }} {{ $product->variants->count() >= 2 ? 'sizes' : 'size' }}</p>
            @endif

            <p class="text-base font-medium text-gray-900">{{ $product->getFormattedPrice() }}</p>
        </div>
    </div>
</div>
