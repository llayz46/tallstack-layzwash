@props(['activeTab'])

<div {{ $attributes->class(['space-y-10 px-4 pb-8 pt-10']) }} role="tabpanel" x-show="activeTab === {{ $activeTab }}">
    <div class="grid grid-cols-2 gap-x-4">
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
                <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg"
                     alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees."
                     class="object-cover object-center">
            </x-slot:image>
            {{ $topSellBrand }}
        </x-nav.header-top-sell>
    </div>

    {{ $slot }}
</div>
