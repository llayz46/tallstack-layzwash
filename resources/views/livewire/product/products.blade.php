<div>
    <!--
      Mobile filter dialog

      Off-canvas menu for mobile, show/hide based on off-canvas menu state.
    -->
    <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
        <!--
          Off-canvas menu backdrop, show/hide based on off-canvas menu state.

          Entering: "transition-opacity ease-linear duration-300"
            From: "opacity-0"
            To: "opacity-100"
          Leaving: "transition-opacity ease-linear duration-300"
            From: "opacity-100"
            To: "opacity-0"
        -->
        <div class="fixed inset-0 bg-black bg-opacity-25"></div>

        <div class="fixed inset-0 z-40 flex">
            <!--
              Off-canvas menu, show/hide based on off-canvas menu state.

              Entering: "transition ease-in-out duration-300 transform"
                From: "translate-x-full"
                To: "translate-x-0"
              Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "translate-x-full"
            -->
            <div
                class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-6 shadow-xl">
                <div class="flex items-center justify-between px-4">
                    <h2 class="text-lg font-medium text-gray-900">Filters</h2>
                    <button type="button"
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
                    <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-0" aria-expanded="false">
                                    <span class="text-sm font-medium text-gray-900">Color</span>
                                    <span class="ml-6 flex h-7 items-center">
                      <!--
                        Expand/collapse icon, toggle classes based on section open state.

                        Open: "-rotate-180", Closed: "rotate-0"
                      -->
                      <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor"
                           aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd"/>
                      </svg>
                    </span>
                        </button>
                        </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-0">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="color-0-mobile" name="color[]" value="white" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-0-mobile" class="ml-3 text-sm text-gray-500">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-1-mobile" name="color[]" value="beige" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-1-mobile" class="ml-3 text-sm text-gray-500">Beige</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-2-mobile" name="color[]" value="blue" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-2-mobile" class="ml-3 text-sm text-gray-500">Blue</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-3-mobile" name="color[]" value="brown" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-3-mobile" class="ml-3 text-sm text-gray-500">Brown</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-4-mobile" name="color[]" value="green" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-4-mobile" class="ml-3 text-sm text-gray-500">Green</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-5-mobile" name="color[]" value="purple" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-5-mobile" class="ml-3 text-sm text-gray-500">Purple</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-1" aria-expanded="false">
                                    <span class="text-sm font-medium text-gray-900">Category</span>
                                    <span class="ml-6 flex h-7 items-center">
                      <!--
                        Expand/collapse icon, toggle classes based on section open state.

                        Open: "-rotate-180", Closed: "rotate-0"
                      -->
                      <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor"
                           aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd"/>
                      </svg>
                    </span>
                                </button>
                            </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-1">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="category-0-mobile" name="category[]" value="new-arrivals"
                                               type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-0-mobile" class="ml-3 text-sm text-gray-500">All New
                                            Arrivals</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-1-mobile" name="category[]" value="tees" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-1-mobile" class="ml-3 text-sm text-gray-500">Tees</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-2-mobile" name="category[]" value="crewnecks"
                                               type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-2-mobile"
                                               class="ml-3 text-sm text-gray-500">Crewnecks</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-3-mobile" name="category[]" value="sweatshirts"
                                               type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-3-mobile"
                                               class="ml-3 text-sm text-gray-500">Sweatshirts</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-4-mobile" name="category[]" value="pants-shorts"
                                               type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-4-mobile" class="ml-3 text-sm text-gray-500">Pants &amp;
                                            Shorts</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    <div class="border-t border-gray-200 pb-4 pt-4">
                        <fieldset>
                            <legend class="w-full px-2">
                                <!-- Expand/collapse section button -->
                                <button type="button"
                                        class="flex w-full items-center justify-between p-2 text-gray-400 hover:text-gray-500"
                                        aria-controls="filter-section-2" aria-expanded="false">
                                    <span class="text-sm font-medium text-gray-900">Sizes</span>
                                    <span class="ml-6 flex h-7 items-center">
                      <!--
                        Expand/collapse icon, toggle classes based on section open state.

                        Open: "-rotate-180", Closed: "rotate-0"
                      -->
                      <svg class="rotate-0 h-5 w-5 transform" viewBox="0 0 20 20" fill="currentColor"
                           aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd"/>
                      </svg>
                    </span>
                                </button>
                            </legend>
                            <div class="px-4 pb-2 pt-4" id="filter-section-2">
                                <div class="space-y-6">
                                    <div class="flex items-center">
                                        <input id="sizes-0-mobile" name="sizes[]" value="xs" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-0-mobile" class="ml-3 text-sm text-gray-500">XS</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-1-mobile" name="sizes[]" value="s" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-1-mobile" class="ml-3 text-sm text-gray-500">S</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-2-mobile" name="sizes[]" value="m" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-2-mobile" class="ml-3 text-sm text-gray-500">M</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-3-mobile" name="sizes[]" value="l" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-3-mobile" class="ml-3 text-sm text-gray-500">L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-4-mobile" name="sizes[]" value="xl" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-4-mobile" class="ml-3 text-sm text-gray-500">XL</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-5-mobile" name="sizes[]" value="2xl" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-5-mobile" class="ml-3 text-sm text-gray-500">2XL</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <main class="mx-auto max-w-2xl px-4 lg:max-w-7xl lg:px-8">
        <nav aria-label="Breadcrumb" class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8 border-b border-gray-200">
            <ol role="list" class="flex items-center space-x-4 py-4">
                <li>
                    <div class="flex items-center">
                        <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500 mr-4" wire:navigate>
                            <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z" clip-rule="evenodd" />
                            </svg>
                            <span class="sr-only">Home</span>
                        </a>
                        <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                            <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor"/>
                        </svg>
                    </div>
                </li>
                <li>
                    <div class="flex items-center">
                        <a href="#" class="mr-4 text-sm font-medium text-gray-500 hover:text-gray-600">{{ $category->name }}</a>
                        <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                            <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor"/>
                        </svg>
                    </div>
                </li>

                <li class="text-sm">
                    <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">if on filtre avec brand (carpro)</a>
                </li>
            </ol>
        </nav>

        <div class="border-b border-gray-200 pb-10 pt-24">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900">New Arrivals</h1>
            <p class="mt-4 text-base text-gray-500">Checkout out the latest release of Basic Tees, new and improved with
                four openings!</p>
        </div>

        <div class="pb-24 pt-12 lg:grid lg:grid-cols-3 lg:gap-x-8 xl:grid-cols-4">
            <aside>
                <h2 class="sr-only">Filters</h2>

                <!-- Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state. -->
                <button type="button" class="inline-flex items-center lg:hidden">
                    <span class="text-sm font-medium text-gray-700">Filters</span>
                    <svg class="ml-1 h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor"
                         aria-hidden="true">
                        <path
                            d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z"/>
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <form class="space-y-10 divide-y divide-gray-200">
                        <div>
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Color</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="color-0" name="color[]" value="white" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-0" class="ml-3 text-sm text-gray-600">White</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-1" name="color[]" value="beige" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-1" class="ml-3 text-sm text-gray-600">Beige</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-2" name="color[]" value="blue" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-2" class="ml-3 text-sm text-gray-600">Blue</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-3" name="color[]" value="brown" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-3" class="ml-3 text-sm text-gray-600">Brown</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-4" name="color[]" value="green" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-4" class="ml-3 text-sm text-gray-600">Green</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="color-5" name="color[]" value="purple" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="color-5" class="ml-3 text-sm text-gray-600">Purple</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Category</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="category-0" name="category[]" value="new-arrivals" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-0" class="ml-3 text-sm text-gray-600">All New
                                            Arrivals</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-1" name="category[]" value="tees" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-1" class="ml-3 text-sm text-gray-600">Tees</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-2" name="category[]" value="crewnecks" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-2" class="ml-3 text-sm text-gray-600">Crewnecks</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-3" name="category[]" value="sweatshirts" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-3" class="ml-3 text-sm text-gray-600">Sweatshirts</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="category-4" name="category[]" value="pants-shorts" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="category-4" class="ml-3 text-sm text-gray-600">Pants &amp;
                                            Shorts</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="pt-10">
                            <fieldset>
                                <legend class="block text-sm font-medium text-gray-900">Sizes</legend>
                                <div class="space-y-3 pt-6">
                                    <div class="flex items-center">
                                        <input id="sizes-0" name="sizes[]" value="xs" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-0" class="ml-3 text-sm text-gray-600">XS</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-1" name="sizes[]" value="s" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-1" class="ml-3 text-sm text-gray-600">S</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-2" name="sizes[]" value="m" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-2" class="ml-3 text-sm text-gray-600">M</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-3" name="sizes[]" value="l" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-3" class="ml-3 text-sm text-gray-600">L</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-4" name="sizes[]" value="xl" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-4" class="ml-3 text-sm text-gray-600">XL</label>
                                    </div>
                                    <div class="flex items-center">
                                        <input id="sizes-5" name="sizes[]" value="2xl" type="checkbox"
                                               class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                        <label for="sizes-5" class="ml-3 text-sm text-gray-600">2XL</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                    </form>
                </div>
            </aside>

            <section aria-labelledby="product-heading" class="mt-6 lg:col-span-2 lg:mt-0 xl:col-span-3">
                <h2 id="product-heading" class="sr-only">Products</h2>

                <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:gap-x-8 xl:grid-cols-3">
                    <div
                        class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                        <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-01.jpg"
                                 alt="Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green."
                                 class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                        </div>
                        <div class="flex flex-1 flex-col space-y-2 p-4">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee 8-Pack
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">Get the full lineup of our Basic Tees. Have a fresh shirt
                                all week, and an extra for laundry day.</p>
                            <div class="flex flex-1 flex-col justify-end">
                                <p class="text-sm italic text-gray-500">8 colors</p>
                                <p class="text-base font-medium text-gray-900">$256</p>
                            </div>
                        </div>
                    </div>
                    <div
                        class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
                        <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
                            <img src="https://tailwindui.com/img/ecommerce-images/category-page-02-image-card-02.jpg"
                                 alt="Front of plain black t-shirt."
                                 class="h-full w-full object-cover object-center sm:h-full sm:w-full">
                        </div>
                        <div class="flex flex-1 flex-col space-y-2 p-4">
                            <h3 class="text-sm font-medium text-gray-900">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Basic Tee
                                </a>
                            </h3>
                            <p class="text-sm text-gray-500">Look like a visionary CEO and wear the same black t-shirt
                                every day.</p>
                            <div class="flex flex-1 flex-col justify-end">
                                <p class="text-sm italic text-gray-500">Black</p>
                                <p class="text-base font-medium text-gray-900">$32</p>
                            </div>
                        </div>
                    </div>

                    <!-- More products... -->
                </div>
            </section>
        </div>
    </main>

    {{--    <footer aria-labelledby="footer-heading" class="border-t border-gray-200 bg-white">--}}
    {{--        <h2 id="footer-heading" class="sr-only">Footer</h2>--}}
    {{--        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">--}}
    {{--            <div class="py-20">--}}
    {{--                <div class="grid grid-cols-1 md:grid-flow-col md:auto-rows-min md:grid-cols-12 md:gap-x-8 md:gap-y-16">--}}
    {{--                    <!-- Image section -->--}}
    {{--                    <div class="col-span-1 md:col-span-2 lg:col-start-1 lg:row-start-1">--}}
    {{--                        <img src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="" class="h-8 w-auto">--}}
    {{--                    </div>--}}

    {{--                    <!-- Sitemap sections -->--}}
    {{--                    <div class="col-span-6 mt-10 grid grid-cols-2 gap-8 sm:grid-cols-3 md:col-span-8 md:col-start-3 md:row-start-1 md:mt-0 lg:col-span-6 lg:col-start-2">--}}
    {{--                        <div class="grid grid-cols-1 gap-y-12 sm:col-span-2 sm:grid-cols-2 sm:gap-x-8">--}}
    {{--                            <div>--}}
    {{--                                <h3 class="text-sm font-medium text-gray-900">Products</h3>--}}
    {{--                                <ul role="list" class="mt-6 space-y-6">--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Bags</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Tees</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Objects</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Home Goods</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Accessories</a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                            <div>--}}
    {{--                                <h3 class="text-sm font-medium text-gray-900">Company</h3>--}}
    {{--                                <ul role="list" class="mt-6 space-y-6">--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Who we are</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Sustainability</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Press</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Careers</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Terms &amp; Conditions</a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="text-sm">--}}
    {{--                                        <a href="#" class="text-gray-500 hover:text-gray-600">Privacy</a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div>--}}
    {{--                            <h3 class="text-sm font-medium text-gray-900">Customer Service</h3>--}}
    {{--                            <ul role="list" class="mt-6 space-y-6">--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Contact</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Shipping</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Returns</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Warranty</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Secure Payments</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">FAQ</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="text-sm">--}}
    {{--                                    <a href="#" class="text-gray-500 hover:text-gray-600">Find a store</a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}

    {{--                    <!-- Newsletter section -->--}}
    {{--                    <div class="mt-12 md:col-span-8 md:col-start-3 md:row-start-2 md:mt-0 lg:col-span-4 lg:col-start-9 lg:row-start-1">--}}
    {{--                        <h3 class="text-sm font-medium text-gray-900">Sign up for our newsletter</h3>--}}
    {{--                        <p class="mt-6 text-sm text-gray-500">The latest deals and savings, sent to your inbox weekly.</p>--}}
    {{--                        <form class="mt-2 flex sm:max-w-md">--}}
    {{--                            <label for="email-address" class="sr-only">Email address</label>--}}
    {{--                            <input id="email-address" type="text" autocomplete="email" required class="w-full min-w-0 appearance-none rounded-md border border-gray-300 bg-white px-4 py-2 text-base text-gray-900 placeholder-gray-500 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-1 focus:ring-indigo-500">--}}
    {{--                            <div class="ml-4 flex-shrink-0">--}}
    {{--                                <button type="submit" class="flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Sign up</button>--}}
    {{--                            </div>--}}
    {{--                        </form>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}

    {{--            <div class="border-t border-gray-100 py-10 text-center">--}}
    {{--                <p class="text-sm text-gray-500">&copy; 2021 Your Company, Inc. All rights reserved.</p>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </footer>--}}
</div>
