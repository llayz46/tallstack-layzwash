<div class="group relative">
    <div class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
        <img src="https://tailwindui.com/img/ecommerce-images/home-page-04-trending-product-02.jpg"
             alt="Hand stitched, orange leather long wallet." class="h-full w-full object-cover object-center">
    </div>
    <h3 class="mt-4 text-sm text-gray-700">
        <a href="{{ route('product.show', ['slug' => 'reerzerzzer', 'product' => 3]) }}" wire:navigate>
            <span class="absolute inset-0"></span>
            Leather Long Wallet
        </a>
    </h3>
    <p class="mt-1 text-sm text-gray-500">Natural</p>
    <p class="mt-1 text-sm font-medium text-gray-900">$75</p>
</div>
