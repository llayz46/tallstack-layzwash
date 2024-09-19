<div class="mt-40 p-4 bg-white rounded-lg border border-gray-200">
    <x-nav.review-stepper :$steps/>

    <div x-data="{
         disabled: false,
         max_stars: 5,
         stars: @entangle('rating'),
         value: @entangle('rating'),
         hoverStar(star) {
             if (this.disabled) {
                 return;
             }
             this.stars = star;
         },
         mouseLeftStar() {
             if (this.disabled) {
                 return;
             }
             this.stars = this.value;
         },
         rate(star) {
             if (this.disabled) {
                 return;
             }
             this.stars = star;
             this.value = star;
             $refs.rated.classList.remove('opacity-0');
             setTimeout(function() {
                 $refs.rated.classList.add('opacity-0');
             }, 2000);
         },
         reset() {
             if (this.disabled) {
                 return;
             }
             this.value = 0;
             this.stars = 0;
         }}" x-init="this.stars = this.value"
         class="mt-8">
        <div class="flex flex-col items-center max-w-6xl mx-auto justify-center">
            <div x-ref="rated" class="absolute -mt-12 text-xs text-gray-400 duration-300 ease-out -translate-y-full opacity-0 cursor-default">Rated <span x-text="value"></span> Stars</div>
            <ul class="flex">
                <template x-for="star in max_stars">
                    <li @mouseover="hoverStar(star)" @mouseleave="mouseLeftStar" @click="rate(star)" class="px-1 cursor-pointer" :class="{ 'text-gray-400 cursor-not-allowed': disabled}">
                        <svg x-show="star > stars" class="text-gray-200 h-6 w-6 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                        <svg x-show="star <= stars" class="text-gray-900 h-6 w-6 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z" clip-rule="evenodd" />
                        </svg>
                    </li>
                </template>
            </ul>
            <button @click="reset" class="inline-flex items-center px-2 py-1 mt-3 text-xs text-gray-600 bg-gray-200 @error('rating') bg-red-200 @enderror rounded-full hover:bg-black hover:text-white">
                <svg class="w-3 h-3 mr-0.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polyline points="24 56 24 104 72 104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/><path d="M67.59,192A88,88,0,1,0,65.77,65.77L24,104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="24"/></svg>
                <span>Reset</span>
            </button>
        </div>
    </div>

    <button wire:click="submit" class="flex items-center justify-center px-3 py-2 mt-4 mx-auto text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
        Next step
    </button>
</div>
