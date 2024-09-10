<main>
    <x-nav.dashboard.header-dashboard/>

    <div class="py-16 sm:py-24">
        <div class="mx-auto max-w-7xl sm:px-2 lg:px-8">
            <div class="mx-auto max-w-2xl px-4 lg:max-w-4xl lg:px-0">
                <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">Order history</h1>
                <p class="mt-2 text-sm text-gray-500">Check the status of recent orders, manage returns, and discover similar products.</p>
            </div>
        </div>

        <div class="mt-16">
            <h2 class="sr-only">Recent orders</h2>
            <div class="mx-auto max-w-7xl sm:px-2 lg:px-8">
                <div class="mx-auto max-w-2xl space-y-8 sm:px-4 lg:max-w-4xl lg:px-0">
                    @foreach($this->orders as $order)
                        <div class="border-b border-t border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border" wire:key="{{ $order->id }}">
                            <x-order.order-header :view-order="true" :order="$order"/>

                            <h4 class="sr-only">Items</h4>
                            <ul role="list" class="divide-y divide-gray-200">
                                @foreach($order->items as $item)
                                    <x-order.item-card :$item/>
                                @endforeach
                            </ul>
                        </div>
                    @endforeach

                    {{ $this->orders->links() }}
                </div>
            </div>
        </div>
    </div>
</main>
