<div class="flex lg:ml-6" x-data="{ search: false }">
    <button @click="search = true; $nextTick(() => $refs.searchInput.focus())" class="p-2 text-gray-400 hover:text-gray-500">
        <span class="sr-only">Search</span>
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z" />
        </svg>
    </button>

    <div class="relative z-10" role="dialog" aria-modal="true">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-25 transition-opacity"
             x-show="search" x-cloak
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto p-4 pt-16 sm:p-6 sm:pt-12 md:p-20" x-show="search" x-cloak>

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
                    <input type="search" wire:model.live.debounce.150ms="search" x-ref="searchInput" autofocus class="h-12 w-full border-0 bg-transparent pl-11 pr-4 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm" placeholder="Search..." role="combobox" aria-expanded="false" aria-controls="options">
                </div>

                @if($products->count() > 0)
                    <ul class="max-h-72 scroll-py-2 overflow-y-auto py-2 text-sm text-gray-800" id="options" role="listbox">
                        @foreach ($products as $product)
                            <x-product.search-result wire:key="{{ $product->id }}" href="{{ route('product.show', ['product' => $product->slug]) }}">{{ $product->brand->name }} - {{ $product->name }}</x-product.search-result>
                        @endforeach
                    </ul>
                @else
                    <p wire:loading.remove class="p-4 text-sm text-gray-500">No result found.</p>
                @endif

                @if($products->count() === 0)
                    <div wire:loading class="my-2 px-4 flex w-full h-5">
                        <div class="animate-pulse bg-gray-400 rounded-md w-full h-full mt-2"></div>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
