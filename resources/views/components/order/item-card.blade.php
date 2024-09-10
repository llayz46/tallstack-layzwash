@props([
    /** @var \mixed */
    'item'
])

<li {{ $attributes->class(['p-4 sm:p-6']) }} wire:key="{{ $item->id }}">
    <div class="flex items-center sm:items-start">
        <div class="h-20 w-20 flex-shrink-0 overflow-hidden rounded-lg bg-gray-200 sm:h-40 sm:w-40">
            <img src="{{ $item->product->mainImage()->path }}" alt="Product image of : {{ $item->product }}"
                 class="h-full w-full object-cover object-center">
        </div>
        <div class="h-20 sm:h-40 ml-6 text-sm flex flex-col justify-between">
            <div class="flex-1">
                <div class="font-medium text-gray-900 sm:flex sm:justify-between">
                    <h5>{{ $item->brand->name }} - {{ $item->name }}</h5>
                    <p class="mt-2 sm:mt-0">{{ $item->price }}</p>
                </div>
                <p class="hidden text-gray-500 sm:mt-2 sm:block">{{ $item->product->description }}</p>
            </div>
            <a href="{{ route('product.show', $item->product) }}"
               class="whitespace-nowrap text-primary-600 hover:text-primary-500 sm:ml-auto">View product</a>
        </div>
    </div>
</li>
