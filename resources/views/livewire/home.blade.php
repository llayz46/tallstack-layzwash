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
                    <x-buttons.link href="#">Browse categories</x-buttons.link>
                </div>
            </div>
        </div>

        <section class="relative -mt-96 sm:mt-0">
            <h2 class="sr-only">Collections</h2>
            <div class="mx-auto grid max-w-md grid-cols-1 gap-y-6 px-4 sm:max-w-7xl sm:grid-cols-3 sm:gap-x-6 sm:gap-y-0 sm:px-6 lg:gap-x-8 lg:px-8">
                <x-card-category-homepage image="protect.webp" href="#">Protection</x-card-category-homepage>
                <x-card-category-homepage image="shampoo-gyeon-bathe+.webp" href="#">Shampoo</x-card-category-homepage>
                <x-card-category-homepage image="wash.webp" href="#">Applicator</x-card-category-homepage>
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
                <x-card-trending-product/>
                <x-card-trending-product/>
                <x-card-trending-product/>
                <x-card-trending-product/>
            </div>

            <div class="mt-8 text-sm md:hidden">
                <a href="#" class="font-medium text-primary-600 hover:text-primary-500">
                    Shop the collection
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


{{--TODO: recherche ?--}}
{{--<main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">--}}
{{--    <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">--}}
{{--        <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>--}}

{{--        <div class="flex items-center">--}}
{{--            <div class="relative inline-block text-left">--}}
{{--                <div>--}}
{{--                    <button type="button" class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900" id="menu-button" aria-expanded="false" aria-haspopup="true">--}}
{{--                        Sort--}}
{{--                        <svg class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}
{{--                </div>--}}

{{--                <!----}}
{{--                  Dropdown menu, show/hide based on menu state.--}}
{{--    --}}
{{--                  Entering: "transition ease-out duration-100"--}}
{{--                    From: "transform opacity-0 scale-95"--}}
{{--                    To: "transform opacity-100 scale-100"--}}
{{--                  Leaving: "transition ease-in duration-75"--}}
{{--                    From: "transform opacity-100 scale-100"--}}
{{--                    To: "transform opacity-0 scale-95"--}}
{{--                -->--}}
{{--                <div class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">--}}
{{--                    <div class="py-1" role="none">--}}
{{--                        <!----}}
{{--                          Active: "bg-gray-100", Not Active: ""--}}
{{--        --}}
{{--                          Selected: "font-medium text-gray-900", Not Selected: "text-gray-500"--}}
{{--                        -->--}}
{{--                        <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>--}}
{{--                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>--}}
{{--                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>--}}
{{--                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>--}}
{{--                        <a href="#" class="text-gray-500 block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">--}}
{{--                <span class="sr-only">View grid</span>--}}
{{--                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                    <path fill-rule="evenodd" d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z" clip-rule="evenodd" />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--            <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">--}}
{{--                <span class="sr-only">Filters</span>--}}
{{--                <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                    <path fill-rule="evenodd" d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z" clip-rule="evenodd" />--}}
{{--                </svg>--}}
{{--            </button>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <section aria-labelledby="products-heading" class="pb-24 pt-6">--}}
{{--        <h2 id="products-heading" class="sr-only">Products</h2>--}}

{{--        <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">--}}
{{--            <!-- Filters -->--}}
{{--            <form class="hidden lg:block">--}}
{{--                <h3 class="sr-only">Categories</h3>--}}
{{--                <ul role="list" class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900">--}}
{{--                    <li>--}}
{{--                        <a href="#">Totes</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Backpacks</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Travel Bags</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Hip Bags</a>--}}
{{--                    </li>--}}
{{--                    <li>--}}
{{--                        <a href="#">Laptop Sleeves</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}

{{--                <div class="border-b border-gray-200 py-6">--}}
{{--                    <h3 class="-my-3 flow-root">--}}
{{--                        <!-- Expand/collapse section button -->--}}
{{--                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-0" aria-expanded="false">--}}
{{--                            <span class="font-medium text-gray-900">Color</span>--}}
{{--                            <span class="ml-6 flex items-center">--}}
{{--                    <!-- Expand icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />--}}
{{--                    </svg>--}}
{{--                                <!-- Collapse icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                  </span>--}}
{{--                        </button>--}}
{{--                    </h3>--}}
{{--                    <!-- Filter section, show/hide based on section state. -->--}}
{{--                    <div class="pt-6" id="filter-section-0">--}}
{{--                        <div class="space-y-4">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-0" name="color[]" value="white" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-0" class="ml-3 text-sm text-gray-600">White</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-1" name="color[]" value="beige" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-1" class="ml-3 text-sm text-gray-600">Beige</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-2" name="color[]" value="blue" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-2" class="ml-3 text-sm text-gray-600">Blue</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-3" name="color[]" value="brown" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-3" class="ml-3 text-sm text-gray-600">Brown</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-4" name="color[]" value="green" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-4" class="ml-3 text-sm text-gray-600">Green</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-color-5" name="color[]" value="purple" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-color-5" class="ml-3 text-sm text-gray-600">Purple</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="border-b border-gray-200 py-6">--}}
{{--                    <h3 class="-my-3 flow-root">--}}
{{--                        <!-- Expand/collapse section button -->--}}
{{--                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-1" aria-expanded="false">--}}
{{--                            <span class="font-medium text-gray-900">Category</span>--}}
{{--                            <span class="ml-6 flex items-center">--}}
{{--                    <!-- Expand icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />--}}
{{--                    </svg>--}}
{{--                                <!-- Collapse icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                  </span>--}}
{{--                        </button>--}}
{{--                    </h3>--}}
{{--                    <!-- Filter section, show/hide based on section state. -->--}}
{{--                    <div class="pt-6" id="filter-section-1">--}}
{{--                        <div class="space-y-4">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-category-0" name="category[]" value="new-arrivals" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-category-0" class="ml-3 text-sm text-gray-600">New Arrivals</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-category-1" name="category[]" value="sale" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-category-1" class="ml-3 text-sm text-gray-600">Sale</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-category-2" name="category[]" value="travel" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-category-2" class="ml-3 text-sm text-gray-600">Travel</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-category-3" name="category[]" value="organization" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-category-3" class="ml-3 text-sm text-gray-600">Organization</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-category-4" name="category[]" value="accessories" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-category-4" class="ml-3 text-sm text-gray-600">Accessories</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="border-b border-gray-200 py-6">--}}
{{--                    <h3 class="-my-3 flow-root">--}}
{{--                        <!-- Expand/collapse section button -->--}}
{{--                        <button type="button" class="flex w-full items-center justify-between bg-white py-3 text-sm text-gray-400 hover:text-gray-500" aria-controls="filter-section-2" aria-expanded="false">--}}
{{--                            <span class="font-medium text-gray-900">Size</span>--}}
{{--                            <span class="ml-6 flex items-center">--}}
{{--                    <!-- Expand icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />--}}
{{--                    </svg>--}}
{{--                                <!-- Collapse icon, show/hide based on section open state. -->--}}
{{--                    <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                      <path fill-rule="evenodd" d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z" clip-rule="evenodd" />--}}
{{--                    </svg>--}}
{{--                  </span>--}}
{{--                        </button>--}}
{{--                    </h3>--}}
{{--                    <!-- Filter section, show/hide based on section state. -->--}}
{{--                    <div class="pt-6" id="filter-section-2">--}}
{{--                        <div class="space-y-4">--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-0" name="size[]" value="2l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-0" class="ml-3 text-sm text-gray-600">2L</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-1" name="size[]" value="6l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-1" class="ml-3 text-sm text-gray-600">6L</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-2" name="size[]" value="12l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-2" class="ml-3 text-sm text-gray-600">12L</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-3" name="size[]" value="18l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-3" class="ml-3 text-sm text-gray-600">18L</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-4" name="size[]" value="20l" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-4" class="ml-3 text-sm text-gray-600">20L</label>--}}
{{--                            </div>--}}
{{--                            <div class="flex items-center">--}}
{{--                                <input id="filter-size-5" name="size[]" value="40l" type="checkbox" checked class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">--}}
{{--                                <label for="filter-size-5" class="ml-3 text-sm text-gray-600">40L</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </form>--}}

{{--            <!-- Product grid -->--}}
{{--            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:col-span-3 lg:gap-x-8">--}}
{{--                <a href="#" class="group text-sm">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">--}}
{{--                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-07-product-01.jpg" alt="White fabric pouch with white zipper, black zipper pull, and black elastic loop." class="h-full w-full object-cover object-center">--}}
{{--                    </div>--}}
{{--                    <h3 class="mt-4 font-medium text-gray-900">Nomad Pouch</h3>--}}
{{--                    <p class="italic text-gray-500">White and Black</p>--}}
{{--                    <p class="mt-2 font-medium text-gray-900">$50</p>--}}
{{--                </a>--}}
{{--                <a href="#" class="group text-sm">--}}
{{--                    <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">--}}
{{--                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-07-product-02.jpg" alt="Front of tote bag with washed black canvas body, black straps, and tan leather handles and accents." class="h-full w-full object-cover object-center">--}}
{{--                    </div>--}}
{{--                    <h3 class="mt-4 font-medium text-gray-900">Zip Tote Basket</h3>--}}
{{--                    <p class="italic text-gray-500">Washed Black</p>--}}
{{--                    <p class="mt-2 font-medium text-gray-900">$140</p>--}}
{{--                </a>--}}

{{--                <!-- More products... -->--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</main>--}}
