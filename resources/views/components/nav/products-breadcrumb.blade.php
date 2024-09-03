@props([
    /** @var \App\Models\Category */
    'category'
])

<nav aria-label="Breadcrumb">
    <ol role="list" class="flex items-center space-x-4 py-4">
        <li>
            <div class="flex items-center">
                <a href="{{ route('home') }}" class="text-gray-400 hover:text-gray-500 mr-4" wire:navigate>
                    <svg class="h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M9.293 2.293a1 1 0 011.414 0l7 7A1 1 0 0117 11h-1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-3a1 1 0 00-1-1H9a1 1 0 00-1 1v3a1 1 0 01-1 1H5a1 1 0 01-1-1v-6H3a1 1 0 01-.707-1.707l7-7z"
                              clip-rule="evenodd"/>
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
                <a href="{{ route('product.index', $category->slug) }}" class="mr-4 text-sm font-medium text-gray-500 hover:text-gray-700">{{ $category->name }}</a>
                <svg viewBox="0 0 6 20" aria-hidden="true" class="h-5 w-auto text-gray-300">
                    <path d="M4.878 4.34H3.551L.27 16.532h1.327l3.281-12.19z" fill="currentColor"/>
                </svg>
            </div>
        </li>

        <li class="text-sm">
            <a href="#" aria-current="page" class="font-medium text-gray-500 hover:text-gray-700">if on filtre avec
                brand (carpro)</a>
        </li>
    </ol>
</nav>
