@props(['menu'])

<div {{ $attributes->class(['flex']) }} x-data="{ {{ $menu }}: false }">
    <div class="relative flex">
        <x-buttons.header-link-menu-button :menu="$menu">{{ $slot }}</x-buttons.header-link-menu-button>
    </div>

    <div class="absolute inset-x-0 top-full text-sm text-gray-500"
         x-show="{{ $menu }}" x-cloak @mouseover.outside="{{ $menu }} = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">

        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

        <div class="relative bg-white">
            <div class="mx-auto max-w-7xl px-8">
                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                        <x-nav.header-top-sell>
                            <x-slot:image>
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                     alt="Drawstring top with elastic loop closure and textured interior padding."
                                     class="object-cover object-center">
                            </x-slot:image>
                            {{ $topSellProduct }}
                        </x-nav.header-top-sell>
                        <x-nav.header-top-sell>
                            <x-slot:image>
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                     alt="Drawstring top with elastic loop closure and textured interior padding."
                                     class="object-cover object-center">
                            </x-slot:image>
                            {{ $topSellBrand }}
                        </x-nav.header-top-sell>
                    </div>
                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                        {{ $links }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
