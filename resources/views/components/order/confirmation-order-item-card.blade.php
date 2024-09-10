@props(['item'])

<div class="flex space-x-6 border-b border-gray-200 py-10">
    <img src="{{ asset($item->product->mainImage()->path) }}" alt="{{ $item->product->name }}" class="h-20 w-20 flex-none rounded-lg bg-gray-100 object-cover object-center sm:h-40 sm:w-40">
    <div class="flex flex-auto flex-col">
        <div>
            <h4 class="font-medium text-gray-900">
                <a href="{{ route('product.show', $item->product->slug) }}">{{ $item->product->brand->name }} - {{ $item->product->name }}</a>
            </h4>
            <p class="mt-2 text-sm text-gray-600">{{ $item->product->description }}</p>
        </div>
        <div class="mt-6 flex flex-1 items-end">
            <dl class="flex space-x-4 divide-x divide-gray-200 text-sm sm:space-x-6">
                <div class="flex">
                    <dt class="font-medium text-gray-900">Quantity</dt>
                    <dd class="ml-2 text-gray-700">{{ $item->quantity }}</dd>
                </div>
                <div class="flex pl-4 sm:pl-6">
                    <dt class="font-medium text-gray-900">Price</dt>
                    <dd class="ml-2 text-gray-700">{{ $item->product->getFormattedPrice() }}</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
