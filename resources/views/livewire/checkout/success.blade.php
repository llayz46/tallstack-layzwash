{{--<div>--}}
{{--    @if($this->order)--}}
{{--        <p>Thank you for your purchase! Your order number is #{{ $this->order->id }}.</p>--}}
{{--    @else--}}
{{--        <p wire:poll>Waiting for payment confirmation...</p>--}}
{{--    @endif--}}
{{--</div>--}}

<div class="mx-auto max-w-3xl px-4 py-16 sm:px-6 sm:py-24 lg:px-8">
    <div class="max-w-xl">
        <h1 class="text-base font-medium text-primary-500">Thank you!</h1>
        <p class="mt-2 text-4xl font-bold tracking-tight sm:text-5xl">Thank You for Shopping with Us!</p>
        <p class="mt-2 text-base text-gray-500">Confirmation of Your Order #{{ $this->order->id }}</p>

        <dl class="mt-12 text-sm font-medium">
            <dt class="text-gray-900">Order ID: <span class="text-primary-500">#{{ $this->order->id }}</span></dt>
            <dd class="mt-2 text-gray-900">Order Date: <span class="text-primary-500">{{ $this->order->created_at->format('F j, Y') }}</span></dd>
        </dl>
    </div>

    <div class="mt-10 border-t border-gray-200">
        <h2 class="sr-only">Your order</h2>

        <h3 class="sr-only">Items</h3>
        @foreach($products as $product)
            <x-order.confirmation-order-item-card :item="$product"/>
        @endforeach

        <div class="sm:ml-40 sm:pl-6">
            <h3 class="sr-only">Your information</h3>

            <h4 class="sr-only">Addresses</h4>
            <dl class="grid grid-cols-2 gap-x-6 py-10 text-sm">
                <div>
                    <dt class="font-medium text-gray-900">Shipping address</dt>
                    <dd class="mt-2 text-gray-700">
                        <address class="not-italic">
                            <span class="block">{{ $this->order->shipping_address['name'] }}</span>
                            <span class="block">{{ $this->order->shipping_address['line1'] }}</span>
                            <span class="block">{{ $this->order->shipping_address['postal_code'] }} {{ $this->order->shipping_address['city'] }}, {{ $this->order->shipping_address['country'] }}</span>
                        </address>
                    </dd>
                </div>
                <div>
                    <dt class="font-medium text-gray-900">Billing address</dt>
                    <dd class="mt-2 text-gray-700">
                        <address class="not-italic">
                            <span class="block">{{ $this->order->billing_address['name'] }}</span>
                            <span class="block">{{ $this->order->billing_address['line1'] }}</span>
                            <span class="block">{{ $this->order->billing_address['postal_code'] }} {{ $this->order->billing_address['city'] }}, {{ $this->order->billing_address['country'] }}</span>
                        </address>
                    </dd>
                </div>
            </dl>

            <h3 class="sr-only">Summary</h3>
            <dl class="space-y-6 border-t border-gray-200 pt-10 text-sm">
                <div class="flex justify-between">
                    <dt class="font-medium text-gray-900">Subtotal</dt>
                    <dd class="text-gray-700">{{ $this->order->amount_subtotal }}</dd>
                </div>
{{--                <div class="flex justify-between">--}}
{{--                    <dt class="flex font-medium text-gray-900">--}}
{{--                        Discount--}}
{{--                        <span class="ml-2 rounded-full bg-gray-200 px-2 py-0.5 text-xs text-gray-600">STUDENT50</span>--}}
{{--                    </dt>--}}
{{--                    <dd class="text-gray-700">-$18.00 (50%)</dd>--}}
{{--                </div>--}}
                <div class="flex justify-between">
                    <dt class="font-medium text-gray-900">Taxes</dt>
                    <dd class="text-gray-700">{{ $this->order->amount_tax }}</dd>
                </div>
                <div class="flex justify-between">
                    <dt class="font-medium text-gray-900">Total</dt>
                    <dd class="text-gray-700">{{ $this->order->amount_total }}</dd>
                </div>
            </dl>
        </div>
    </div>
</div>
