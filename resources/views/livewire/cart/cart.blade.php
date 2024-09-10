<div class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" x-cloak x-show="shoppingCart">

    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
         aria-hidden="true"
         x-show="shoppingCart" x-cloak
         x-transition:enter="ease-in-out duration-500"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in-out duration-500"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"></div>

    <div class="fixed inset-0 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden">
            <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">

                <div class="pointer-events-auto w-screen max-w-md"
                     x-show="shoppingCart" x-cloak
                     x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                     x-transition:enter-start="translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="translate-x-full">
                    <div class="flex h-full flex-col overflow-hidden bg-white shadow-xl">
                        <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                            <div class="flex items-start justify-between">
                                <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                <div class="ml-3 flex h-7 items-center">
                                    <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500" @click="shoppingCart = false">
                                        <span class="absolute -inset-0.5"></span>
                                        <span class="sr-only">Close panel</span>
                                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flow-root">
                                    <ul role="list" class="-my-6 divide-y divide-gray-200">
                                        @if($this->items->isEmpty())
                                            <li class="flex py-6">
                                                <div class="flex-1 flex items-center justify-center">
                                                    <p class="text-sm font-medium text-gray-500">Your cart is empty</p>
                                                </div>
                                            </li>
                                        @else
                                            @foreach($this->items as $item)
                                                <li class="flex py-6" wire:key="{{ $item->id }}">
                                                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                        <img src="{{ $item->product->mainImage()->path }}" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                                                    </div>

                                                    <div class="ml-4 flex flex-1 flex-col">
                                                        <div>
                                                            <div class="flex justify-between text-base font-medium text-gray-900">
                                                                <h3>
                                                                    <span>
                                                                        <a href="{{ route('product.index', $item->product->brand->slug) }}" class="hover:text-primary-500">
                                                                            {{ $item->product->brand->name }}
                                                                        </a>
                                                                        -
                                                                        <a href="{{ route('product.show', $item->product->slug) }}" class="hover:text-primary-500">
                                                                            {{ $item->product->name }}
                                                                        </a>
                                                                    </span>
                                                                </h3>
                                                                <p class="ml-4">${{ $item->product->price * $item->quantity }}</p>
                                                            </div>
                                                            @if($item->variant->capacity)
                                                                <p class="mt-1 text-sm text-gray-500">{{ $item->variant->capacity }}</p>
                                                            @else
                                                                <p class="mt-1 text-sm text-gray-500">{{ $item->variant->size }}</p>
                                                            @endif
                                                        </div>
                                                        <div class="flex flex-1 items-end justify-between text-sm">
                                                            <div class="flex items-center text-gray-500">
                                                                <p>
                                                                    Qty
                                                                </p>

                                                                <button wire:click="decrement({{ $item->id }})" @disabled($item->quantity === 1) class="ml-2 mr-1 rounded hover:bg-gray-200 hover:text-gray-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" />
                                                                    </svg>
                                                                </button>

                                                                {{ $item->quantity }}

                                                                <button wire:click="increment({{ $item->id }})" class="ml-1 rounded hover:bg-gray-200 hover:text-gray-700">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                                                    </svg>
                                                                </button>
                                                            </div>

                                                            <div class="flex">
                                                                <button type="button" class="font-medium text-primary-600 hover:text-primary-500" wire:click="delete({{ $item->id }})">Remove</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                            <div class="flex justify-between text-base font-medium text-gray-900">
                                <p>Subtotal</p>
                                <p>${{ $this->total }}</p>
                            </div>

                            <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                            @auth
                                <x-buttons.link wire:click="checkout" class="mt-6 w-full cursor-pointer">Checkout</x-buttons.link>
                            @else
                                <x-buttons.link href="{{ route('auth.login') }}" class="mt-6 w-full">Login</x-buttons.link>
                            @endauth

                            <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                <p>
                                    or
                                    <x-buttons.text-arrow-link @click="shoppingCart = false" class="cursor-pointer">Continue Shopping</x-buttons.text-arrow-link>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
