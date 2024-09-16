<div x-data="{ mobileFilterDialogOpen: false }">

    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true" x-show="mobileFilterDialogOpen">

        <div class="fixed inset-0 bg-black bg-opacity-25"
             x-show="mobileFilterDialogOpen" x-cloak
             x-transition:enter="transition-opacity ease-linear duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity ease-linear duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>

        <div class="fixed inset-0 z-40 flex">

            <div class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl"
                 x-show="mobileFilterDialogOpen" x-cloak
                 x-transition:enter="transition ease-in-out duration-300 transform"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transition ease-in-out duration-300 transform"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full">
                <div class="flex items-center justify-between px-4">
                    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                    <button type="button" @click="mobileFilterDialogOpen = false"
                            class="relative -mr-2 flex h-10 w-10 items-center justify-center p-2 text-gray-400 hover:text-gray-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Close menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                             aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>

                <!-- Filters -->
                <form class="mt-4">
                    @if($this->brand)
                        <div class="border-t border-gray-200 pb-4 pt-4" x-data="{ isCapacityOpen: false }">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isCapacityOpen = !isCapacityOpen"
                                            class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-1" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Capacity</span>
                                        <span class="ml-6 flex h-7 items-center">

                          <svg :class="isCapacityOpen ? '-rotate-180' : 'rotate-0'" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor"
                               aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                          </svg>
                        </span>
                            </button>
                                </legend>
                                <div class="px-4 pb-2 pt-4"
                                     x-show="isCapacityOpen" x-cloak
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 transform -translate-y-10"
                                     x-transition:enter-end="opacity-100 transform translate-y-0"
                                     x-transition:leave="transition ease-in duration-300"
                                     x-transition:leave-start="opacity-100 transform translate-y-0"
                                     x-transition:leave-end="opacity-0 transform -translate-y-10">
                                    <div class="space-y-6">
                                        @foreach($this->categories as $category)
                                            <x-form.input-variant wire:key="{{ $category['id'] }}" wire:model.live.debounce="filterByCategories" value="{{ $category['id'] }}">{{ $category['name'] }}</x-form.input-variant>
                                        @endforeach
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    @endif

                    @if($this->category || (!$this->category && !$this->brand))
                        <div class="border-t border-gray-200 pb-4 pt-4" x-data="{ isBrandOpen: false }">
                            <fieldset>
                                <legend class="w-full px-2">
                                    <!-- Expand/collapse section button -->
                                    <button type="button" @click="isBrandOpen = !isBrandOpen"
                                            class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                            aria-controls="filter-section-2" aria-expanded="false">
                                        <span class="text-sm font-medium text-gray-900">Brands</span>
                                        <span class="ml-6 flex h-7 items-center">
                          <!--
                            Expand/collapse icon, toggle classes based on section open state.

                            Open: "-rotate-180", Closed: "rotate-0"
                          -->
                          <svg :class="isBrandOpen ? '-rotate-180' : 'rotate-0'" class="h-5 w-5 transform transition-transform duration-300" viewBox="0 0 20 20" fill="currentColor"
                               aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                          </svg>
                        </span>
                            </button>
                                </legend>
                                <div class="px-4 pb-2 pt-4"
                                     x-show="isBrandOpen" x-cloak
                                     x-transition:enter="transition ease-out duration-300"
                                     x-transition:enter-start="opacity-0 transform -translate-y-10"
                                     x-transition:enter-end="opacity-100 transform translate-y-0"
                                     x-transition:leave="transition ease-in duration-300"
                                     x-transition:leave-start="opacity-100 transform translate-y-0"
                                     x-transition:leave-end="opacity-0 transform -translate-y-10">
                                    <div class="space-y-6">
                                        @foreach($this->allBrands as $brand)
                                            <x-form.input-variant wire:key="{{ $brand['id'] }}" wire:model.live.debounce="filterByBrands" value="{{ $brand['id'] }}">{{ $brand['name'] }}</x-form.input-variant>
                                        @endforeach
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    @endif
                </form>
            </div>
        </div>
    </div>

    <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <x-nav.products-breadcrumb :item="$this->category ?? $this->brand"/>

        <div class="border-b border-gray-200 pb-10 pt-24">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">{{ $this->category ? $category['name'] : ($this->brand ? $brand['name'] : 'All products') }}</h1>
            <p class="mt-4 text-base text-gray-500">{{ $this->category ? $category['description'] : ($this->brand ? $brand['banner'] : 'Browse all our products') }}</p>
        </div>

        <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
            <aside>
                <h2 class="sr-only">Filters</h2>

                <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                <button type="button" class="inline-flex items-center lg:hidden" @click="mobileFilterDialogOpen = true">
                    <span class="text-sm font-medium text-gray-700">Filters</span>
                    <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                         aria-hidden="true">
                        <path
                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <form class="space-y-10 divide-y divide-gray-200">
                        @if($this->category || (!$this->category && !$this->brand))
                            <div>
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Brand</legend>
                                    <div class="space-y-3 pt-6">
                                        @foreach($this->allBrands as $brand)
                                            <x-form.input-variant wire:key="{{ $brand['id'] }}" wire:model.live.debounce="filterByBrands" value="{{ $brand['id'] }}">{{ $brand['name'] }}</x-form.input-variant>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>
                        @endif

                        @if($this->brand)
                            <div class="pt-10">
                                <fieldset>
                                    <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                    <div class="space-y-3 pt-6">
                                        @foreach($this->categories as $category)
                                            <x-form.input-variant wire:key="{{ $category['id'] }}" wire:model.live.debounce="filterByCategories" value="{{ $category['id'] }}">{{ $category['name'] }}</x-form.input-variant>
                                        @endforeach
                                    </div>
                                </fieldset>
                            </div>
                        @endif
                    </form>
                </div>
            </aside>

            <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                <h2 id="product-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                    @foreach($products as $product)
                        <x-product.card-browse-product-card :$product/>
                    @endforeach
                </div>

                <div class="mt-4 sm:mt-10">
                    {{ $products->links() }}
                </div>
            </section>
        </div>
    </main>
</div>
