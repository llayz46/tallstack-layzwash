@props(['images', 'product'])

<div {{ $attributes->class(['mt-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8']) }} x-data="{ image: '{{ $images->where('main', 1)->first()->path }}' }">
    <div class="aspect-h-2 aspect-w-3 col-span-2 overflow-hidden rounded-lg block">
        <img x-bind:src="image"
             alt="Main product image : {{ $product->name }}"
             class="h-full w-full object-cover object-center">
    </div>
    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-4">
        @if($images->count() == 4)
            <div class="lg:grid lg:gap-4 lg:grid-cols-2">
                @if(isset($images[0]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[0]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[0]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
                @if(isset($images[1]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[1]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[1]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
            </div>
            <div class="lg:grid lg:gap-4 lg:grid-cols-2">
                @if(isset($images[2]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[2]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[2]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
                @if(isset($images[3]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[3]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[3]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
            </div>
        @else
            <div class="lg:grid lg:gap-4 lg:grid-cols-2">
                @if(isset($images[0]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[0]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[0]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
                @if(isset($images[1]))
                    <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                        <img src="{{ $images[1]['path'] }}"
                             alt="Product image : {{ $product->name }}" @click="image = '{{ $images[1]->path }}'" class="h-full w-full object-cover object-center">
                    </div>
                @endif
            </div>
            @if(isset($images[2]))
                <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                    <img src="{{ $images[2]['path'] }}"
                         alt="Product image : {{ $product->name }}" @click="image = '{{ $images[2]->path }}'" class="h-full w-full object-cover object-center">
                </div>
            @endif
        @endif
    </div>

    {{-- MOBILE --}}
    <div class="grid mt-2 sm:mt-4 grid-cols-4 gap-2 sm:gap-4 lg:hidden">
        @foreach($images as $image)
            <div class="aspect-h-2 aspect-w-3 overflow-hidden rounded-lg">
                <img src="{{ $image['path'] }}" wire:key="{{ $image->id }}" @click="image = '{{ $image->path }}'"
                     alt="Product : {{ $product->name }}" class="h-full w-full object-cover object-center">
            </div>
        @endforeach
    </div>
</div>
