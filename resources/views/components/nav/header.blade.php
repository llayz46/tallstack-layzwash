<div class="bg-background" x-data="{ mobileMenu: false, shoppingCart: false }" x-cloak>
    <!--
      Mobile menu

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden"
         role="dialog" aria-modal="true"
         x-show="mobileMenu">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25"
             aria-hidden="true"
             x-show="mobileMenu" x-cloak
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>

        <div class="fixed inset-0 z-40 flex">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
            -->
            <div class="relative flex w-full max-w-xs flex-col overflow-y-auto bg-white pb-12 shadow-xl"
                 x-show="mobileMenu" x-cloak @click.outside="mobileMenu = false" @close.stop="mobileMenu = false"
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="-translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="-translate-x-full">
                <div class="flex px-4 pb-2 pt-5">
                    <button type="button" class="relative -m-2 inline-flex items-center justify-center rounded-md p-2 text-gray-400"
                            @click="mobileMenu = false" x-cloak>
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Links -->
                <div class="mt-2">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                            <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                            <button id="tabs-1-tab-1" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-1" role="tab" type="button">Women</button>
                            <!-- Selected: "border-indigo-600 text-indigo-600", Not Selected: "border-transparent text-gray-900" -->
                            <button id="tabs-1-tab-2" class="flex-1 whitespace-nowrap border-b-2 border-transparent px-1 py-4 text-base font-medium text-gray-900" aria-controls="tabs-1-panel-2" role="tab" type="button">Men</button>
                        </div>
                    </div>

                    <!-- 'Women' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-1" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4">
                            <div class="group relative text-sm">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-01.jpg" alt="Models sitting back to back, wearing Basic Tee in black and bone." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                            <div class="group relative text-sm">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/mega-menu-category-02.jpg" alt="Close up of Basic Tee fall bundle with off-white, ochre, olive, and black tees." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Basic Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                        </div>
                        <div>
                            <p id="women-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                            <ul role="list" aria-labelledby="women-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Dresses</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Denim</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="women-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                            <ul role="list" aria-labelledby="women-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="women-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="women-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Significant Other</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- 'Men' tab panel, show/hide based on tab state. -->
                    <div id="tabs-1-panel-2" class="space-y-10 px-4 pb-8 pt-10" aria-labelledby="tabs-1-tab-2" role="tabpanel" tabindex="0">
                        <div class="grid grid-cols-2 gap-x-4">
                            <div class="group relative text-sm">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-04-detail-product-shot-01.jpg" alt="Drawstring top with elastic loop closure and textured interior padding." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    New Arrivals
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                            <div class="group relative text-sm">
                                <div class="aspect-h-1 aspect-w-1 overflow-hidden rounded-lg bg-gray-100 group-hover:opacity-75">
                                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-06.jpg" alt="Three shirts in gray, white, and blue arranged on table with same line drawing of hands and shapes overlapping on front of shirt." class="object-cover object-center">
                                </div>
                                <a href="#" class="mt-6 block font-medium text-gray-900">
                                    <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                    Artwork Tees
                                </a>
                                <p aria-hidden="true" class="mt-1">Shop now</p>
                            </div>
                        </div>
                        <div>
                            <p id="men-clothing-heading-mobile" class="font-medium text-gray-900">Clothing</p>
                            <ul role="list" aria-labelledby="men-clothing-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Tops</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Pants</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sweaters</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">T-Shirts</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Jackets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Activewear</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Browse All</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="men-accessories-heading-mobile" class="font-medium text-gray-900">Accessories</p>
                            <ul role="list" aria-labelledby="men-accessories-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Watches</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Wallets</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Bags</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Sunglasses</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Hats</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Belts</a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <p id="men-brands-heading-mobile" class="font-medium text-gray-900">Brands</p>
                            <ul role="list" aria-labelledby="men-brands-heading-mobile" class="mt-6 flex flex-col space-y-6">
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Re-Arranged</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Counterfeit</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">Full Nelson</a>
                                </li>
                                <li class="flow-root">
                                    <a href="#" class="-m-2 block p-2 text-gray-500">My Way</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Company</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Stores</a>
                    </div>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                    <div class="flow-root">
                        <a href="#" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="relative bg-white">
{{--        TODO: dans le back gerer ces messages --}}
        <p class="flex h-10 items-center justify-center bg-primary-400 px-4 text-sm font-medium text-white sm:px-6 lg:px-8 z-30 relative">Get free delivery on orders over $50</p>

        <nav aria-label="Top" class="relative z-20 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="border-b border-gray-200">
                <div class="flex h-16 items-center">
                    <!-- Mobile menu toggle, controls the 'mobileMenuOpen' state. -->
                    <button type="button" class="relative rounded-md bg-white p-2 text-gray-400 lg:hidden"
                            @click="mobileMenu = ! mobileMenu">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                    <!-- Logo -->
                    <div class="ml-4 flex lg:ml-0">
                        <a href="{{ route('home') }}" wire:navigate.hover>
                            <span class="sr-only">LayzWash</span>
                            <x-application-logo class="h-8 w-auto text-primary-500" />
                        </a>
                    </div>

                    <!-- Flyout menus -->
                    <div class="hidden lg:ml-8 lg:block lg:self-stretch">
                        <div class="flex h-full space-x-8">
                            <x-nav.header-link-menu menu="flyoutMenuWomen">Women</x-nav.header-link-menu>
                            <x-nav.header-link-menu menu="flyoutMenuMen">Men</x-nav.header-link-menu>

                            <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Company</a>
                            <a href="#" class="flex items-center text-sm font-medium text-gray-700 hover:text-gray-800">Stores</a>
                        </div>
                    </div>

                    <div class="ml-auto flex items-center">
                        <div class="hidden lg:flex lg:flex-1 lg:items-center lg:justify-end lg:space-x-6">
                            @guest
                                <x-nav.header-link href="{{ route('auth.login') }}">Sign in</x-nav.header-link>
                                <span class="h-6 w-px bg-gray-200" aria-hidden="true"></span>
                                <x-nav.header-link href="{{ route('auth.register') }}">Create account</x-nav.header-link>
                            @else
                                <div class="relative ml-4 flex-shrink-0"
                                     x-data="{ userMenu: false }"
                                     @click.outside="userMenu = false"
                                     @close.stop="userMenu = false">
                                    <div class="block flex-shrink-0 cursor-pointer">
                                        <div class="flex items-center">
                                            <button @click="userMenu = ! userMenu" class="group">
                                                @if(auth()->user()->avatar)
                                                    <img class="inline-block h-9 w-9 rounded-full group-focus:outline-none group-focus:ring-2 group-focus:ring-primary-600 group-focus:ring-offset-2" src="{{ auth()->user()->avatar }}" alt="">
                                                @else
                                                    <img class="inline-block h-9 w-9 rounded-full group-focus:outline-none group-focus:ring-2 group-focus:ring-primary-600 group-focus:ring-offset-2" src="https://ui-avatars.com/api/?background=ebe6ef&name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&color=ea546c&font-size=0.5&semibold=true&format=svg" alt="">
                                                @endif
                                            </button>
                                            <div class="ml-3">
                                                <p class="text-sm font-medium text-gray-700">{{ auth()->user()->getFullName() }}</p>
                                                <form class="flex" action="{{ route('auth.logout') }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-xs text-left font-medium text-gray-500 hover:text-gray-700">Log out</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="userMenu" x-cloak
                                         class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-background py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                         x-transition:enter="transition ease-out duration-100"
                                         x-transition:enter-start="transform opacity-0 scale-95"
                                         x-transition:enter-end="transform opacity-100 scale-100"
                                         x-transition:leave="transition ease-in duration-75"
                                         x-transition:leave-start="opacity-100 scale-100"
                                         x-transition:leave-end="opacity-0 scale-95"
                                         @click="userMenu = false"
                                         role="menu"
                                         aria-orientation="vertical"
                                         aria-labelledby="user-menu-button"
                                         tabindex="-1"
                                    >
                                        <x-nav.header-link-usermenu href="{{ route('account') }}">Your account</x-nav.header-link-usermenu>
                                    </div>
                                </div>
                            @endguest
                        </div>

                        <!-- Search -->
                        <div class="flex lg:ml-6" x-data="{ search: false }">
                            <button @click="search = true" class="p-2 text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Search</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
                                </svg>
                            </button>

                            <div class="relative z-10" role="dialog" aria-modal="true">
                                <!--
                                  Background backdrop, show/hide based on modal state.

                                  Entering: "ease-out duration-300"
                                    From: "opacity-0"
                                    To: "opacity-100"
                                  Leaving: "ease-in duration-200"
                                    From: "opacity-100"
                                    To: "opacity-0"
                                -->
                                <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"
                                     x-show="search" x-cloak
                                     x-transition:enter="ease-out duration-300"
                                     x-transition:enter-start="opacity-0"
                                     x-transition:enter-end="opacity-100"
                                     x-transition:leave="ease-in duration-200"
                                     x-transition:leave-start="opacity-100"
                                     x-transition:leave-end="opacity-0"></div>

                                <div class="fixed inset-0 z-10 w-screen overflow-y-auto p-4 pt-16 sm:p-6 sm:pt-12 md:p-20" x-show="search" x-cloak>
                                    <!--
                                      Command palette, show/hide based on modal state.

                                      Entering: "ease-out duration-300"
                                        From: "opacity-0 scale-95"
                                        To: "opacity-100 scale-100"
                                      Leaving: "ease-in duration-200"
                                        From: "opacity-100 scale-100"
                                        To: "opacity-0 scale-95"
                                    -->
                                    <div class="mx-auto max-w-xl transform divide-y divide-gray-100 overflow-hidden rounded-xl bg-white shadow-2xl ring-1 ring-black ring-opacity-5 transition-all"
                                         @click.outside="search = false"
                                         @keydown.escape.window="search = false"
                                         x-transition:enter="ease-out duration-300"
                                         x-transition:enter-start="opacity-0 scale-95"
                                         x-transition:enter-end="opacity-100 scale-100"
                                         x-transition:leave="ease-in duration-200"
                                         x-transition:leave-start="opacity-100 scale-100"
                                         x-transition:leave-end="opacity-0 scale-95">
                                        <div class="relative">
                                            <svg class="pointer-events-none absolute left-4 top-3.5 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd" />
                                            </svg>
                                            <input type="text" class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." role="combobox" aria-expanded="false" aria-controls="options">
                                        </div>

                                        <!-- Results, show/hide based on command palette state -->
                                        <ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800" id="options" role="listbox">
                                            <!-- Active: "bg-indigo-600 text-white" -->
                                            <li class="cursor-default select-none px-4 py-2" id="option-1" role="option" tabindex="-1">Leslie Alexander</li>
                                            <li class="cursor-default select-none px-4 py-2" id="option-2" role="option" tabindex="-1">Michael Foster</li>
                                            <li class="cursor-default select-none px-4 py-2" id="option-3" role="option" tabindex="-1">Dries Vincent</li>
                                            <li class="cursor-default select-none px-4 py-2" id="option-4" role="option" tabindex="-1">Lindsay Walton</li>
                                            <li class="cursor-default select-none px-4 py-2" id="option-5" role="option" tabindex="-1">Courtney Henry</li>
                                        </ul>

                                        <!-- Empty state, show/hide based on command palette state -->
                                        <p class="p-4 text-sm text-gray-500">No people found.</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="ml-4 flow-root lg:ml-6">
                            <a href="#" class="group -m-2 flex items-center p-2" @click="shoppingCart = true">
                                <svg class="h-6 w-6 flex-shrink-0 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
                                </svg>
                                <span class="ml-2 text-sm font-medium text-gray-700 group-hover:text-gray-800">0</span>
                                <span class="sr-only">items in cart, view bag</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="relative z-50" aria-labelledby="slide-over-title" role="dialog" aria-modal="true" x-cloak x-show="shoppingCart">
        <!--
          Background backdrop, show/hide based on slide-over state.

          Entering: "ease-in-out duration-500"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "ease-in-out duration-500"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
             aria-hidden="true"
             x-show="shoppingCart" x-cloak
             x-transition:enter="ease-in-out duration-500"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-500"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>

        <div class="fixed inset-0 overflow-hidden">
            <div class="absolute inset-0 overflow-hidden">
                <div class="pointer-events-none fixed inset-y-0 right-0 flex max-w-full pl-10">
                    <!--
                      Slide-over panel, show/hide based on slide-over state.

                      Entering: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-full"
                        To: "translate-x-0"
                      Leaving: "transform transition ease-in-out duration-500 sm:duration-700"
                        From: "translate-x-0"
                        To: "translate-x-full"
                    -->
                    <div class="pointer-events-auto w-screen max-w-md"
                         x-show="shoppingCart" x-cloak
                         x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                         x-transition:enter-start="translate-x-full"
                         x-transition:enter-end="translate-x-0"
                         x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                         x-transition:leave-start="translate-x-0"
                         x-transition:leave-end="translate-x-full">
                        <div class="flex h-full flex-col overflow-y-scroll bg-white shadow-xl">
                            <div class="flex-1 overflow-y-auto px-4 py-6 sm:px-6">
                                <div class="flex items-start justify-between">
                                    <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Shopping cart</h2>
                                    <div class="ml-3 flex h-7 items-center">
                                        <button type="button" class="relative -m-2 p-2 text-gray-400 hover:text-gray-500" @click="shoppingCart = false">
                                            <span class="absolute -inset-0.5"></span>
                                            <span class="sr-only">Close panel</span>
                                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>

                                <div class="mt-8">
                                    <div class="flow-root">
                                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                                            <li class="flex py-6">
                                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg" alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt." class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#">Throwback Hip Bag</a>
                                                            </h3>
                                                            <p class="ml-4">$90.00</p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty 1</p>

                                                        <div class="flex">
                                                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="flex py-6">
                                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg" alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch." class="h-full w-full object-cover object-center">
                                                </div>

                                                <div class="ml-4 flex flex-1 flex-col">
                                                    <div>
                                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                                            <h3>
                                                                <a href="#">Medium Stuff Satchel</a>
                                                            </h3>
                                                            <p class="ml-4">$32.00</p>
                                                        </div>
                                                        <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                    </div>
                                                    <div class="flex flex-1 items-end justify-between text-sm">
                                                        <p class="text-gray-500">Qty 1</p>

                                                        <div class="flex">
                                                            <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <!-- More products... -->
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="border-t border-gray-200 px-4 py-6 sm:px-6">
                                <div class="flex justify-between text-base font-medium text-gray-900">
                                    <p>Subtotal</p>
                                    <p>$262.00</p>
                                </div>

                                <p class="mt-0.5 text-sm text-gray-500">Shipping and taxes calculated at checkout.</p>
                                <x-buttons.link href="#" class="mt-6 w-full">Checkout</x-buttons.link>

                                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                                    <p>
                                        or
                                        <x-buttons.text-arrow-link href="#">Continue Shopping</x-buttons.text-arrow-link>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
