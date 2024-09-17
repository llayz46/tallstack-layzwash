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
                    <div class="flex h-full flex-col overflow-hidden bg-white shadow-xl" x-data="{ showItems: true }">
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
                                    <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start sm:justify-between" x-show="!showItems">
                                        <h4 class="sr-only">Visa</h4>
                                        <div class="sm:flex sm:items-start">
                                            <svg class="h-8 w-auto sm:h-6 sm:flex-shrink-0" viewBox="0 0 36 24" aria-hidden="true">
                                                <rect width="36" height="24" fill="#224DBA" rx="4" />
                                                <path fill="#fff" d="M10.925 15.673H8.874l-1.538-6c-.073-.276-.228-.52-.456-.635A6.575 6.575 0 005 8.403v-.231h3.304c.456 0 .798.347.855.75l.798 4.328 2.05-5.078h1.994l-3.076 7.5zm4.216 0h-1.937L14.8 8.172h1.937l-1.595 7.5zm4.101-5.422c.057-.404.399-.635.798-.635a3.54 3.54 0 011.88.346l.342-1.615A4.808 4.808 0 0020.496 8c-1.88 0-3.248 1.039-3.248 2.481 0 1.097.969 1.673 1.653 2.02.74.346 1.025.577.968.923 0 .519-.57.75-1.139.75a4.795 4.795 0 01-1.994-.462l-.342 1.616a5.48 5.48 0 002.108.404c2.108.057 3.418-.981 3.418-2.539 0-1.962-2.678-2.077-2.678-2.942zm9.457 5.422L27.16 8.172h-1.652a.858.858 0 00-.798.577l-2.848 6.924h1.994l.398-1.096h2.45l.228 1.096h1.766zm-2.905-5.482l.57 2.827h-1.596l1.026-2.827z" />
                                            </svg>
                                            <div class="mt-3 sm:ml-4 sm:mt-0">
                                                <div class="text-sm font-medium text-gray-900">Code : 4242 4242 4242 4242</div>
                                                <div class="mt-1 text-sm text-gray-600 sm:flex sm:items-center">
                                                    <div>Expires 12/30</div>
                                                    <span class="hidden sm:mx-2 sm:inline" aria-hidden="true">&middot;</span>
                                                    <div class="mt-1 sm:mt-0">Pick a later date</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mt-4 sm:ml-6 sm:mt-0 sm:flex-shrink-0 relative flex items-center"
                                             x-data="{
                                                 copyText: '4242 4242 4242 4242',
                                                 copyNotification: false,
                                                 copyToClipboard() {
                                                     navigator.clipboard.writeText(this.copyText);
                                                     this.copyNotification = true;
                                                     let that = this;
                                                     setTimeout(function(){
                                                         that.copyNotification = false;
                                                     }, 3000);
                                                 }
                                             }">
                                            <div x-show="copyNotification" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-2" x-transition:enter-end="opacity-100 translate-x-0" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-2" class="absolute left-0" x-cloak>
                                                <div class="px-3 h-7 -ml-1.5 items-center flex text-xs bg-green-500 border-r border-green-500 -translate-x-full text-white rounded">
                                                    <span>Copied!</span>
                                                    <div class="absolute right-0 inline-block h-full -mt-px overflow-hidden translate-x-3 -translate-y-2 top-1/2">
                                                        <div class="w-3 h-3 origin-top-left transform rotate-45 bg-green-500 border border-transparent"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button @click="copyToClipboard()" type="button" class="inline-flex items-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50">Copy</button>
                                        </div>
                                    </div>

                                    <ul role="list" class="-my-6 divide-y divide-gray-200" x-show="showItems">
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
                                <x-buttons.link wire:click="checkout" x-show="!showItems" class="mt-6 w-full cursor-pointer">Checkout</x-buttons.link>
                                <x-buttons.link @click="showItems = false" x-show="showItems" class="mt-6 w-full cursor-pointer">Checkout</x-buttons.link>
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
