<div>
    <div class="relative">
        <div aria-hidden="true" class="absolute inset-0 hidden sm:flex sm:flex-col">
            <div class="relative w-full flex-1 bg-gray-800">
                <div class="absolute inset-0 overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/homepage-products/m4-homepage.webp') }}" alt="bmw m4 red" class="h-full w-full object-cover object-center">
                </div>
                <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
            </div>
            <div class="h-32 w-full bg-white md:h-40 lg:h-48"></div>
        </div>

        <div class="relative mx-auto max-w-3xl px-4 pb-96 text-center sm:px-6 sm:pb-0 lg:px-8">
            <!-- Background image and overlap -->
            <div aria-hidden="true" class="absolute inset-0 flex flex-col sm:hidden">
                <div class="relative w-full flex-1 bg-gray-800">
                    <div class="absolute inset-0 overflow-hidden">
                        <img src="{{ Vite::asset('resources/images/homepage-products/m4-homepage.webp') }}" alt="bmw m4 red" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="absolute inset-0 bg-gray-900 opacity-50"></div>
                </div>
                <div class="h-48 w-full bg-white"></div>
            </div>
            <div class="relative py-32">
                <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">Mid-Season Sale</h1>
                <div class="mt-4 sm:mt-6">
{{--                    TODO: Une page products.index mais sans aucun filtre --}}
                    <x-buttons.link href="#">Browse categories</x-buttons.link>
                </div>
            </div>
        </div>

        <section class="relative -mt-96 sm:mt-0">
            <h2 class="sr-only">Collections</h2>
            <div class="mx-auto grid max-w-md grid-cols-1 gap-y-6 px-4 sm:max-w-7xl sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 sm:px-6 lg:gap-x-8 lg:px-8">
                <x-card-category-homepage image="protect.webp" :href="route('product.index', 'ceramics')">Ceramic</x-card-category-homepage>
                <x-card-category-homepage image="shampoo-gyeon-bathe+.webp" :href="route('product.index', 'shampoo')">Shampoo</x-card-category-homepage>
                <x-card-category-homepage image="wash.webp" :href="route('product.index', 'coating-accessories')">Coating Accessories</x-card-category-homepage>
            </div>
        </section>
    </div>

    <section>
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
            <div class="md:flex md:items-center md:justify-between">
                <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Trending Products</h2>
                <x-buttons.text-arrow-link class="hidden md:block" href="#">Shop the collection</x-buttons.text-arrow-link>
            </div>

            <div class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
                @foreach($products as $product)
                    <x-card-trending-product :$product/>
                @endforeach
            </div>

            <div class="mt-8 text-sm md:hidden">
                <a href="#" class="font-medium text-primary-600 hover:text-primary-500">
                    Shop the collection
{{--                    TODO: Une page products.index trier par produit les plus vendus --}}

                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
            <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-gray-900">Our perks</h2>

            <div class="divide-y divide-gray-200 lg:flex lg:justify-center lg:divide-x lg:divide-y-0 lg:py-8">
                <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
                    <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
                        <svg class="h-8 w-8 flex-shrink-0 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5" />
                        </svg>
                        <div class="ml-4 flex flex-auto flex-col-reverse">
                            <h3 class="font-medium text-gray-900">24/7 Customer Support</h3>
                            <p class="text-sm text-gray-500">Fast response</p>
                        </div>
                    </div>
                </div>
                <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
                    <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
                        <svg class="h-8 w-8 flex-shrink-0 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0l3.181 3.183a8.25 8.25 0 0013.803-3.7M4.031 9.865a8.25 8.25 0 0113.803-3.7l3.181 3.182m0-4.991v4.99" />
                        </svg>
                        <div class="ml-4 flex flex-auto flex-col-reverse">
                            <h3 class="font-medium text-gray-900">Free shipping on returns</h3>
                            <p class="text-sm text-gray-500">Send it back for free</p>
                        </div>
                    </div>
                </div>
                <div class="py-8 lg:w-1/3 lg:flex-none lg:py-0">
                    <div class="mx-auto flex max-w-xs items-center px-4 lg:max-w-none lg:px-8">
                        <svg class="h-8 w-8 flex-shrink-0 text-primary-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12" />
                        </svg>
                        <div class="ml-4 flex flex-auto flex-col-reverse">
                            <h3 class="font-medium text-gray-900">Free, contactless delivery</h3>
                            <p class="text-sm text-gray-500">The shipping is on us</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
