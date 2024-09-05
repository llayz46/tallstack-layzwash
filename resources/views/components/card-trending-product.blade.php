@props(['product'])

<div class="group relative">
    <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
        <img src="{{ $product->mainImage()->path }}"
             alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
    </div>
    <h3 class="mt-4 text-sm text-gray-700">
        <a href="{{ route('product.show', ['product' => $product->slug]) }}" wire:navigate>
            <span class="absolute inset-0"></span>
            {{ $product->name }}
        </a>
    </h3>
    <p class="mt-1 text-sm text-gray-500">{{ $product->brand->name }}</p>
    <p class="mt-1 text-sm font-medium text-gray-900">{{ $product->getFormattedPrice() }}</p>
</div>
