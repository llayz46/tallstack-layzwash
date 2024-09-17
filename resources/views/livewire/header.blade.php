<div class="bg-background" x-data="{ mobileMenu: false, shoppingCart: false }" x-cloak>

    <div class="relative z-40 lg:hidden"
         role="dialog" aria-modal="true"
         x-show="mobileMenu">

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
                <div class="mt-2" x-data="{ activeTab: 'exterior' }">
                    <div class="border-b border-gray-200">
                        <div class="-mb-px flex space-x-8 px-4" aria-orientation="horizontal" role="tablist">
                            <button @click="activeTab = 'exterior'" :class="{ 'border-primary-600': activeTab === 'exterior', 'border-transparent': activeTab !== 'exterior' }" class="flex-1 text-gray-900 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-1" role="tab" type="button">Exterior</button>
                            <button @click="activeTab = 'interior'" :class="{ 'border-primary-600': activeTab === 'interior', 'border-transparent': activeTab !== 'interior' }" class="flex-1 text-gray-900 whitespace-nowrap border-b-2 px-1 py-4 text-base font-medium" aria-controls="tabs-1-panel-2" role="tab" type="button">Interior</button>
                        </div>
                    </div>

                    <!-- 'Exterior' tab panel -->
                    <x-nav.mobile.header-link-menu active-tab="'exterior'">
                        <x-slot:topSellProduct>
                            <a href="{{ route('product.show', $exteriorTopProduct->slug) }}" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                {{ $exteriorTopProduct->name }}
                            </a>
                        </x-slot:topSellProduct>
                        <x-slot:topSellBrand>
                            <a href="{{ route('product.show', $exteriorTopBrand->slug) }}" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                {{ $exteriorTopBrand->name }}
                            </a>
                        </x-slot:topSellBrand>

                        @foreach($exteriorCategories as $category)
                            <x-nav.mobile.header-links-group>
                                {{ $category->name }}
                                <x-slot:content>
                                    @foreach($category->children as $childCategory)
                                        <li class="flow-root">
                                            <a href="{{ route('product.index', $childCategory->slug) }}" class="-m-2 block p-2 text-gray-500">{{ $childCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </x-slot:content>
                            </x-nav.mobile.header-links-group>
                        @endforeach
                    </x-nav.mobile.header-link-menu>

                    <!-- 'Interior' tab panel -->
                    <x-nav.mobile.header-link-menu active-tab="'interior'">
                        <x-slot:topSellProduct>
                            <a href="{{ route('product.show', $interiorTopProduct->slug) }}" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                {{ $interiorTopProduct->name }}
                            </a>
                        </x-slot:topSellProduct>
                        <x-slot:topSellBrand>
                            <a href="{{ route('product.show', $interiorTopBrand->slug) }}" class="mt-6 block font-medium text-gray-900">
                                <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                {{ $interiorTopBrand->name }}
                            </a>
                        </x-slot:topSellBrand>

                        @foreach($interiorCategories as $category)
                            <x-nav.mobile.header-links-group>
                                {{ $category->name }}
                                <x-slot:content>
                                    @foreach($category->children as $childCategory)
                                        <li class="flow-root">
                                            <a href="{{ route('product.index', $childCategory->slug) }}" class="-m-2 block p-2 text-gray-500">{{ $childCategory->name }}</a>
                                        </li>
                                    @endforeach
                                </x-slot:content>
                            </x-nav.mobile.header-links-group>
                        @endforeach
                    </x-nav.mobile.header-link-menu>
                </div>

                <div class="space-y-6 border-t border-gray-200 px-4 py-6">
                    <div class="flow-root">
                        <a href="{{ route('auth.login') }}" class="-m-2 block p-2 font-medium text-gray-900">Sign in</a>
                    </div>
                    <div class="flow-root">
                        <a href="{{ route('auth.register') }}" class="-m-2 block p-2 font-medium text-gray-900">Create account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <header class="relative bg-white">
        {{--        TODO: dans le back gerer ces messages --}}
        <p class="flex h-10 items-center justify-center bg-primary-400 px-4 text-sm font-medium text-white sm:px-6 lg:px-8 z-10 relative">Get free delivery on orders over $50</p>

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
                            <x-nav.header-link-menu menu="flyoutMenuExt">
                                Exterior
                                <x-slot:links>
                                    <x-slot:topSellProduct>
                                        <a href="{{ route('product.show', $exteriorTopProduct->slug) }}" class="mt-6 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            {{ $exteriorTopProduct->name }}
                                        </a>
                                    </x-slot:topSellProduct>
                                    <x-slot:topSellBrand>
                                        <a href="{{ route('product.index', $exteriorTopBrand->slug) }}" class="mt-6 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            {{ $exteriorTopBrand->name }}
                                        </a>
                                    </x-slot:topSellBrand>

                                    @foreach($exteriorCategories as $category)
                                        <x-nav.header-links-group>
                                            {{ $category->name }}
                                            <x-slot:content>
                                                @foreach($category->children as $childCategory)
                                                    <li class="flex">
                                                        <a href="{{ route('product.index', $childCategory->slug) }}" class="hover:text-gray-800" wire:navigate>{{ $childCategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            </x-slot:content>
                                        </x-nav.header-links-group>
                                    @endforeach
                                </x-slot:links>
                            </x-nav.header-link-menu>
                            <x-nav.header-link-menu menu="flyoutMenuInt">
                                Interior
                                <x-slot:links>
                                    <x-slot:topSellProduct>
                                        <a href="{{ route('product.show', $interiorTopProduct->slug) }}" class="mt-6 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            {{ $interiorTopProduct->name }}
                                        </a>
                                    </x-slot:topSellProduct>
                                    <x-slot:topSellBrand>
                                        <a href="{{ route('product.index', $interiorTopBrand->slug) }}" class="mt-6 block font-medium text-gray-900">
                                            <span class="absolute inset-0 z-10" aria-hidden="true"></span>
                                            {{ $interiorTopBrand->name }}
                                        </a>
                                    </x-slot:topSellBrand>

                                    @foreach($interiorCategories as $category)
                                        <x-nav.header-links-group>
                                            {{ $category->name }}
                                            <x-slot:content>
                                                @foreach($category->children as $childCategory)
                                                    <li class="flex">
                                                        <a href="{{ route('product.index', $childCategory->slug) }}" class="hover:text-gray-800" wire:navigate>{{ $childCategory->name }}</a>
                                                    </li>
                                                @endforeach
                                            </x-slot:content>
                                        </x-nav.header-links-group>
                                    @endforeach
                                </x-slot:links>
                            </x-nav.header-link-menu>
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
                                                    <img class="inline-block object-cover h-9 w-9 rounded-full group-focus:outline-none group-focus:ring-2 group-focus:ring-primary-600 group-focus:ring-offset-2" src="{{ asset('storage/' . auth()->user()->avatar) }}" alt="">
                                                @else
                                                    <img class="inline-block object-cover h-9 w-9 rounded-full group-focus:outline-none group-focus:ring-2 group-focus:ring-primary-600 group-focus:ring-offset-2" src="https://ui-avatars.com/api/?background=ebe6ef&name={{ auth()->user()->first_name }}+{{ auth()->user()->last_name }}&color=ea546c&font-size=0.5&semibold=true&format=svg" alt="">
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
                                        <x-nav.header-link-usermenu href="{{ route('orders.index') }}">Your orders</x-nav.header-link-usermenu>
                                    </div>
                                </div>
                            @endguest
                        </div>

                        <!-- Search -->
                        <livewire:product.search/>

                        <!-- Cart -->
                        <livewire:cart.navigation/>
                    </div>
                </div>
            </div>
        </nav>
    </header>
</div>
