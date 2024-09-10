@props(['order'])

<div {{ $attributes->class(['flex items-center border-b border-gray-200 p-4 sm:grid sm:grid-cols-4 sm:gap-x-6 sm:p-6']) }}>
    <dl class="grid flex-1 grid-cols-2 gap-x-6 text-sm sm:col-span-3 sm:grid-cols-3 lg:col-span-2">
        <div>
            <dt class="font-medium text-gray-900">Order number</dt>
            <dd class="mt-1 text-gray-500">{{ $order->id }}</dd>
        </div>
        <div class="hidden sm:block">
            <dt class="font-medium text-gray-900">Date placed</dt>
            <dd class="mt-1 text-gray-500">
                <time datetime="{{ $order->created_at->format('Y-m-d') }}">{{ $order->created_at->format('D m, Y') }}</time>
            </dd>
        </div>
        <div>
            <dt class="font-medium text-gray-900">Total amount</dt>
            <dd class="mt-1 font-medium text-gray-900">{{ $order->amount_total }}</dd>
        </div>
    </dl>

    <div class="relative flex justify-end lg:hidden" x-data="{ dropdown: false }">
        <div class="flex items-center">
            <button type="button" class="-m-2 flex items-center p-2 text-gray-400 hover:text-gray-500"
                    @click="dropdown = true" aria-expanded="false" aria-haspopup="true">
                <span class="sr-only">Options for order {{ $order->id }}</span>
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                     aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M12 6.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 12.75a.75.75 0 110-1.5.75.75 0 010 1.5zM12 18.75a.75.75 0 110-1.5.75.75 0 010 1.5z"/>
                </svg>
            </button>
        </div>

        <div class="absolute right-0 z-10 mt-2 w-40 origin-bottom-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
             role="menu" aria-orientation="vertical" tabindex="-1"
             x-show="dropdown" @click.away="dropdown = false"
             x-transition:enter="transition ease-out duration-100"
             x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95">
            <div class="py-1" role="none">
                @if($viewOrder)
                    <a href="{{ route('orders.show', $order->id) }}" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                       role="menuitem" tabindex="-1">
                        View Order
                    </a>
                @endif
                <form action="{{ route('pdf', $order->id) }}" method="post">
                    @csrf
                    <button class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900"
                            role="menuitem" tabindex="-1">
                        Download Invoice
                    </button>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden lg:col-span-2 lg:flex lg:items-center lg:justify-end lg:space-x-4">
        @if($viewOrder)
            <a href="{{ route('orders.show', $order->id) }}"
               class="flex items-center justify-center rounded-md border border-gray-300 bg-white px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                <span>View Order</span>
                <span class="sr-only">{{ $order->id }}</span>
            </a>
        @endif
        <form action="{{ route('pdf', $order->id) }}" method="post">
            @csrf
            <button class="flex items-center justify-center rounded-md border border-gray-300 bg-white px-2.5 py-2 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-primary-500 focus:ring-offset-2">
                <span>Download Invoice</span>
                <span class="sr-only">for order {{ $order->id }}</span>
            </button>
        </form>
    </div>
</div>
