@props(['image', 'href'])

<div {{ $attributes->class(['group relative h-96 rounded-lg bg-white shadow-xl sm:aspect-h-5 sm:aspect-w-4 sm:h-auto']) }}>
    <div>
        <div aria-hidden="true" class="absolute inset-0 overflow-hidden rounded-lg">
            <div class="absolute inset-0 overflow-hidden group-hover:opacity-75">
                <img src="{{ Vite::asset('resources/images/homepage-products/'.$image) }}"
                     alt="Woman wearing a comfortable cotton t-shirt." class="h-full w-full object-cover object-center">
            </div>
            <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-50"></div>
        </div>
        <div class="absolute inset-0 flex items-end rounded-lg p-6">
            <a href="{{ $href }}">
                <p aria-hidden="true" class="text-sm text-white">Shop the collection</p>
                <h3 class="mt-1 font-semibold text-white">
                    {{ $slot }}
                </h3>
            </a>
        </div>
    </div>
</div>
