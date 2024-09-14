<div {{ $attributes->class(['group relative']) }}>
    <div class="aspect-h-3 aspect-w-4 overflow-hidden rounded-lg bg-gray-100">
        <img src="{{ $product->mainImage()->path }}"
             alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background."
             class="object-cover object-center">
        <div class="flex items-end p-4 opacity-0 group-hover:opacity-100" aria-hidden="true">
            <div class="w-full rounded-md bg-white bg-opacity-75 px-4 py-2 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">
                View Product
            </div>
        </div>
    </div>
    <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
        <h3>
            <a href="{{ route('product.show', $product->slug) }}" wire:navigate>
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $product->name }}
            </a>
        </h3>
        <p>{{ $product->getFormattedPrice() }}</p>
    </div>
    <p class="mt-1 text-sm text-gray-500">{{ $product->brand->name }}</p>
</div>
