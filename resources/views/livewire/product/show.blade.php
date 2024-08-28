<main class="pt-10 sm:pt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <x-nav.product-breadcrumb :$product/>

    <x-product.image-gallery :images="$product->images"/>

    <div class="pt-10 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->name }}</h1>
        </div>

        <!-- Options -->
        <div class="mt-4 lg:row-span-3 lg:mt-0">
            <h2 class="sr-only">Product information</h2>
            <p class="text-3xl tracking-tight text-gray-900">{{ $product->getFormattedPrice() }}</p>

            <!-- Reviews -->
            <div class="mt-6">
                <h3 class="sr-only">Reviews</h3>
                <div class="flex items-center">
                    <div class="flex items-center">
                        <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                    </div>
                    <p class="sr-only">4 out of 5 stars</p>
                    <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117 reviews</a>
                </div>
            </div>

            <form class="mt-10">
                <!-- Colors -->
                <div>
                    <h3 class="text-sm font-medium text-gray-900">Color</h3>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Choose a color</legend>
                        <div class="flex items-center space-x-3">
                            <!--
                              Active and Checked: "ring ring-offset-1"
                              Not Active and Checked: "ring-2"
                            -->
                            <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-0-label">
                                <span id="color-choice-0-label" class="sr-only">White</span>
                                <span aria-hidden="true" class="h-8 w-8 bg-white rounded-full border border-black border-opacity-10"></span>
                            </label>
                            <!--
                              Active and Checked: "ring ring-offset-1"
                              Not Active and Checked: "ring-2"
                            -->
                            <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-400">
                                <input type="radio" name="color-choice" value="Gray" class="sr-only" aria-labelledby="color-choice-1-label">
                                <span id="color-choice-1-label" class="sr-only">Gray</span>
                                <span aria-hidden="true" class="h-8 w-8 bg-gray-200 rounded-full border border-black border-opacity-10"></span>
                            </label>
                            <!--
                              Active and Checked: "ring ring-offset-1"
                              Not Active and Checked: "ring-2"
                            -->
                            <label class="relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none ring-gray-900">
                                <input type="radio" name="color-choice" value="Black" class="sr-only" aria-labelledby="color-choice-2-label">
                                <span id="color-choice-2-label" class="sr-only">Black</span>
                                <span aria-hidden="true" class="h-8 w-8 bg-gray-900 rounded-full border border-black border-opacity-10"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <!-- Sizes -->
                <div class="mt-10">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Size</h3>
                        <a href="#" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Size guide</a>
                    </div>

                    <fieldset class="mt-4">
                        <legend class="sr-only">Choose a size</legend>
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-not-allowed bg-gray-50 text-gray-200">
                                <input type="radio" name="size-choice" value="XXS" disabled class="sr-only" aria-labelledby="size-choice-0-label">
                                <span id="size-choice-0-label">XXS</span>
                                <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                    <svg class="absolute inset-0 h-full w-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                    </svg>
                  </span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="XS" class="sr-only" aria-labelledby="size-choice-1-label">
                                <span id="size-choice-1-label">XS</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="S" class="sr-only" aria-labelledby="size-choice-2-label">
                                <span id="size-choice-2-label">S</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="M" class="sr-only" aria-labelledby="size-choice-3-label">
                                <span id="size-choice-3-label">M</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="L" class="sr-only" aria-labelledby="size-choice-4-label">
                                <span id="size-choice-4-label">L</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="XL" class="sr-only" aria-labelledby="size-choice-5-label">
                                <span id="size-choice-5-label">XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="2XL" class="sr-only" aria-labelledby="size-choice-6-label">
                                <span id="size-choice-6-label">2XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                            <!-- Active: "ring-2 ring-indigo-500" -->
                            <label class="group relative flex items-center justify-center rounded-md border py-3 px-4 text-sm font-medium uppercase hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6 cursor-pointer bg-white text-gray-900 shadow-sm">
                                <input type="radio" name="size-choice" value="3XL" class="sr-only" aria-labelledby="size-choice-7-label">
                                <span id="size-choice-7-label">3XL</span>
                                <!--
                                  Active: "border", Not Active: "border-2"
                                  Checked: "border-indigo-500", Not Checked: "border-transparent"
                                -->
                                <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                            </label>
                        </div>
                    </fieldset>
                </div>

                <button type="submit" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Add to bag</button>
            </form>
        </div>

        <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pb-16 lg:pr-8 lg:pt-6">
            <!-- Description and details -->
            <div>
                <h3 class="sr-only">Description</h3>

                <div class="space-y-6">
                    <p class="text-base text-gray-900">{{ $product->description }}</p>
                </div>
            </div>

            <div class="mt-10">
                <h3 class="text-sm font-medium text-gray-900">Usage</h3>

                <div class="mt-4">
                    <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
                        @foreach(json_decode($product->usage) as $item)
                            <li class="text-gray-400"><span class="text-gray-600">{{ $item }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <!-- Reviews -->
            <section aria-labelledby="reviews-heading" class="border-t border-gray-200 pt-10 lg:pt-16">
                <h2 id="reviews-heading" class="sr-only">Reviews</h2>

                <div class="space-y-10">
                    <div class="flex flex-col sm:flex-row">
                        <div class="order-2 mt-6 sm:ml-16 sm:mt-0">
                            <h3 class="text-sm font-medium text-gray-900">This is the best white t-shirt out there</h3>
                            <p class="sr-only">5 out of 5 stars</p>

                            <div class="mt-3 space-y-6 text-sm text-gray-600">
                                <p>I've searched my entire life for a t-shirt that reflects every color in the visible spectrum. Scientists said it couldn't be done, but when I look at this shirt, I see white light bouncing right back into my eyes. Incredible!</p>
                            </div>
                        </div>

                        <div class="order-1 flex items-center sm:flex-col sm:items-start">
                            <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixqx=oilqXxSqey&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Mark Edwards." class="h-12 w-12 rounded-full">

                            <div class="ml-4 sm:ml-0 sm:mt-4">
                                <p class="text-sm font-medium text-gray-900">Mark Edwards</p>
                                <div class="mt-2 flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row">
                        <div class="order-2 mt-6 sm:ml-16 sm:mt-0">
                            <h3 class="text-sm font-medium text-gray-900">Adds the perfect variety to my wardrobe</h3>
                            <p class="sr-only">4 out of 5 stars</p>

                            <div class="mt-3 space-y-6 text-sm text-gray-600">
                                <p>I used to be one of those unbearable minimalists who only wore the same black v-necks every day. Now, I have expanded my wardrobe with three new crewneck options! Leaving off one star only because I wish the heather gray was more gray.</p>
                            </div>
                        </div>

                        <div class="order-1 flex items-center sm:flex-col sm:items-start">
                            <img src="https://images.unsplash.com/photo-1520785643438-5bf77931f493?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.5&w=256&h=256&q=80" alt="Blake Reid." class="h-12 w-12 rounded-full">

                            <div class="ml-4 sm:ml-0 sm:mt-4">
                                <p class="text-sm font-medium text-gray-900">Blake Reid</p>
                                <div class="mt-2 flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col sm:flex-row">
                        <div class="order-2 mt-6 sm:ml-16 sm:mt-0">
                            <h3 class="text-sm font-medium text-gray-900">All good things come in 6-Packs</h3>
                            <p class="sr-only">5 out of 5 stars</p>

                            <div class="mt-3 space-y-6 text-sm text-gray-600">
                                <p>Tasty beverages, strong abs that will never be seen due to aforementioned tasty beverages, and these Basic Tees!</p>
                            </div>
                        </div>

                        <div class="order-1 flex items-center sm:flex-col sm:items-start">
                            <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="Ben Russel." class="h-12 w-12 rounded-full">

                            <div class="ml-4 sm:ml-0 sm:mt-4">
                                <p class="text-sm font-medium text-gray-900">Ben Russel</p>
                                <div class="mt-2 flex items-center">
                                    <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <div class="py-16 sm:py-24">
        <div class="flex items-center justify-between space-x-4">
            <h2 class="text-xl font-bold text-gray-900">Similar products</h2>
            <x-buttons.text-arrow-link href="#">View all</x-buttons.text-arrow-link>
        </div>
        <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
            <x-product.card-similar-product/>
            <x-product.card-similar-product/>
            <x-product.card-similar-product/>
            <x-product.card-similar-product/>
        </div>
    </div>
</main>
