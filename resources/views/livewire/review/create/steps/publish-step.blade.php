<form class="mt-40 p-4 bg-white rounded-lg border border-gray-200 max-w-screen-sm" wire:submit="submit">
    <x-nav.review-stepper :$steps/>

    <div class="flex flex-col sm:flex-row pt-4">
        <div class="order-2 mt-6 sm:ml-16 sm:mt-0">
            <h3 class="text-sm font-medium text-gray-900">{{ $state['title'] }}</h3>
            <p class="sr-only">{{ $state['rating'] }} out of 5 stars</p>

            <div class="mt-3 space-y-6 text-sm text-gray-600">
                <p>{{ $state['content'] }}</p>
            </div>
        </div>

        <div class="order-1 flex items-center sm:flex-col sm:items-start">
            <img src="{{ asset(auth()->user()->avatar) }}" alt="{{ auth()->user()->getFullName() }}" class="h-12 w-12 rounded-full object-cover">

            <div class="ml-4 sm:ml-0 sm:mt-4">
                <p class="text-sm font-medium text-gray-900">{{ auth()->user()->getFullName() }}</p>
                <div class="mt-2 flex items-center">
                    @for ($i = 0; $i < $state['rating']; $i++)
                        <svg class="text-gray-900 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                    @endfor
                    @for ($i = 0; $i < 5 - $state['rating']; $i++)
                        <svg class="text-gray-200 h-5 w-5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                    @endfor
                </div>
            </div>
        </div>
    </div>

    <button class="flex items-center justify-center px-3 py-2 mt-4 mx-auto text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
        Publish
    </button>
</form>
