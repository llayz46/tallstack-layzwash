<main>
    <x-nav.dashboard.header-dashboard/>

    <div class="mt-16">
        <h2 class="sr-only">Order number #{{ $this->order->id }}</h2>
        <div class="mx-auto max-w-7xl sm:px-2 lg:px-8">
            <div class="mx-auto max-w-2xl space-y-8 sm:px-4 lg:max-w-4xl lg:px-0">
                <div class="border-b border-t border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border">
                    <h3 class="sr-only">Order placed on <time datetime="{{ $this->order->created_at->format('Y-m-d') }}">{{ $this->order->created_at->format('D m, Y') }}</time></h3>

                    <x-order.order-header :view-order="false" :order="$this->order"/>

                    <!-- Products -->
                    <h4 class="sr-only">Items</h4>
                    <ul role="list" class="divide-y divide-gray-200">
                        @foreach($this->order->items as $item)
                            <x-order.item-card :$item/>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
