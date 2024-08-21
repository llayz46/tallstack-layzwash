@props(['menu'])

<div {{ $attributes->class(['flex']) }} x-data="{ {{ $menu }}: false }">
    <div class="relative flex">
        <!-- Item active: "border-indigo-600 text-indigo-600", Item inactive: "border-transparent text-gray-700 hover:text-gray-800" -->
        <button type="button"
                class="relative z-10 -mb-px flex items-center border-b-2 border-transparent pt-px text-sm font-medium text-gray-700 transition-colors duration-200 ease-out hover:text-gray-800"
                aria-expanded="false" @mouseover="{{ $menu }} = true">{{ $slot }}
        </button>
    </div>

    <!--
      'Men' flyout menu, show/hide based on flyout menu state.

      Entering: "transition ease-out duration-200"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition ease-in duration-150"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="absolute inset-x-0 top-full text-sm text-gray-500"
         x-show="{{ $menu }}" x-cloak @mouseover.outside="{{ $menu }} = false"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0">
        <!-- Presentational element used to render the bottom shadow, if we put the shadow on the actual panel it pokes out the top, so we use this shorter element to hide the top of the shadow -->
        <div class="absolute inset-0 top-1/2 bg-white shadow" aria-hidden="true"></div>

        <div class="relative bg-white">
            <div class="mx-auto max-w-7xl px-8">
                <div class="grid grid-cols-2 gap-x-8 gap-y-10 py-16">
                    <div class="col-start-2 grid grid-cols-2 gap-x-8">
                        <div class="group relative text-base sm:text-sm">
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg"
                                     alt="Drawstring top with elastic loop closure and textured interior padding."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                New Arrivals
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                        <div class="group relative text-base sm:text-sm">
                            <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg"
                                     alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt."
                                     class="object-cover object-center">
                            </div>
                            <a href="#" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                Artwork Tees
                            </a>
                            <p aria-hidden="true" class="mt-1">Shop now</p>
                        </div>
                    </div>
                    <div class="row-start-1 grid grid-cols-3 gap-x-8 gap-y-10 text-sm">
                        <div>
                            <p id="Clothing-heading" class="font-medium text-gray-900">Clothing</p>
                            <ul role="list" aria-labelledby="Clothing-heading"
                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Tops</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Pants</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Sweaters</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">T-Shirts</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Jackets</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Activewear</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Browse All</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="Accessories-heading" class="font-medium text-gray-900">Accessories</p>
                            <ul role="list" aria-labelledby="Accessories-heading"
                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Watches</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Wallets</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Bags</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Sunglasses</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Hats</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Belts</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="Brands-heading" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="Brands-heading"
                                class="mt-6 space-y-6 sm:mt-4 sm:space-y-4">
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Re-Arranged</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Counterfeit</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">Full Nelson</a>
                                </li>
                                <li class="flex">
                                    <a href="#" class="hover:text-gray-800">My Way</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
