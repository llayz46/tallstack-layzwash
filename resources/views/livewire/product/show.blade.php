<main class="pt-10 sm:pt-16 mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <x-nav.product-breadcrumb :$product/>

    <x-product.image-gallery :images="$product->images" :$product/>

    <div class="pt-10 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8 lg:pt-16">
        <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
            <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $product->brand->name }} - {{ $product->name }}</h1>
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
                        @for ($i = 0; $i < $product->getRating(); $i++)
                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        @endfor
                        @for ($i = 0; $i < 5 - $product->getRating(); $i++)
                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                            </svg>
                        @endfor
                    </div>
                    <p class="sr-only">{{ $product->getRating() }} out of 5 stars</p>
                    <a href="#reviews-heading" class="ml-3 text-sm font-medium text-primary-600 hover:text-primary-500">{{ $product->comments->count() }} reviews</a>
                </div>
            </div>

            <!-- Capacity -->
            @if($product->variants->first()->capacity !== null)
                <form class="mt-10" wire:submit.prevent="addToCart">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Capacity</h3>
                    </div>

                    <fieldset class="mt-4" x-data="{ selectedVariant: null }">
                        <legend class="sr-only">Choose a capacity</legend>
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            @foreach($product->variants as $variant)
                                <x-form.variant-select
                                    variant="{{ $variant->id }}"
                                    :disabled="$variant->stock === 0">
                                    {{ $variant->capacity }}
                                </x-form.variant-select>
                            @endforeach
                        </div>
                        @error('variant')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <x-form.button-submit class="mt-10 py-3">Add to cart</x-form.button-submit>
                </form>
            @endif

            <!-- Sizes -->
            @if($product->variants->first()->size !== null)
                <form class="mt-10" wire:submit.prevent="addToCart">
                    <div class="flex items-center justify-between">
                        <h3 class="text-sm font-medium text-gray-900">Size</h3>
                    </div>

                    <fieldset class="mt-4" x-data="{ selectedVariant: null }">
                        <legend class="sr-only">Choose a size</legend>
                        <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                            @foreach($product->variants as $variant)
                                <x-form.variant-select
                                    variant="{{ $variant->id }}"
                                    :disabled="$variant->stock === 0">
                                    {{ $variant->size }}
                                </x-form.variant-select>
                            @endforeach
                        </div>
                        @error('variant')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </fieldset>

                    <x-form.button-submit class="mt-10 py-3">Add to cart</x-form.button-submit>
                </form>
            @endif
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
                    @foreach($this->comments as $comment)
                        <div class="flex flex-col sm:flex-row">
                            <div class="order-2 mt-6 sm:ml-16 sm:mt-0">
                                <h3 class="text-sm font-medium text-gray-900">{{ $comment->title }}</h3>
                                <p class="sr-only">{{ $comment->rating }} out of 5 stars</p>

                                <div class="mt-3 space-y-6 text-sm text-gray-600">
                                    <p>{{ $comment->content }}</p>
                                </div>
                            </div>

                            <div class="order-1 flex items-center sm:flex-col sm:items-start">
                                <img src="{{ $comment->user->avatar }}" alt="Mark Edwards." class="h-12 w-12 rounded-full">

                                <div class="ml-4 sm:ml-0 sm:mt-4">
                                    <p class="text-sm font-medium text-gray-900">{{ $comment->user->getFullName() }}</p>
                                    <div class="mt-2 flex items-center">
                                        @for ($i = 0; $i < $comment->rating; $i++)
                                            <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                            </svg>
                                        @endfor
                                        @for ($i = 0; $i < 5 - $comment->rating; $i++)
                                            <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        </div>
    </div>

    <div class="py-16 sm:py-24">
        @if($similarProducts->count() !== 0)
            <div class="flex items-center justify-between space-x-4">
                <h2 class="text-xl font-bold text-gray-900">Similar products</h2>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                @foreach($similarProducts as $product)
                    <x-product.card-similar-product :product="$product"/>
                @endforeach
            </div>
        @endif
    </div>
</main>
