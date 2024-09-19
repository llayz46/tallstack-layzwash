<form class="mt-40 p-4 bg-white rounded-lg border border-gray-200" wire:submit="submit">
    <x-nav.review-stepper :$steps/>

    <div class="w-full max-w-xs mx-auto mt-8 space-y-4">
        <div class="space-y-1">
            <label for="title" class="block text-sm text-neutral-500">Title</label>
            <input type="text" id="title" wire:model.blur="title" placeholder="Title" class="flex w-full px-3 py-2 text-sm bg-white border rounded-md border-neutral-200 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50">
            @error('title')
                <p class="block text-sm text-red-500">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="space-y-1">
            <label for="content" class="block text-sm text-neutral-500">Content</label>
            <textarea x-data="{
                        resize () {
                            $el.style.height = '0px';
                            $el.style.height = $el.scrollHeight + 'px'
                        }
                    }"
                      x-init="resize()"
                      @input="resize()"
                      type="text" id="content"
                      wire:model="content"
                      placeholder="Share your experience with us"
                      class="flex w-full h-auto min-h-[80px] px-3 py-2 text-sm bg-white border rounded-md border-neutral-200 ring-offset-background placeholder:text-neutral-400 focus:border-neutral-300 focus:outline-none focus:ring-1 focus:ring-offset-2 focus:ring-neutral-400 disabled:cursor-not-allowed disabled:opacity-50"
            ></textarea>
            @error('content')
            <p class="block text-sm text-red-500">
                {{ $message }}
            </p>
            @enderror
        </div>
    </div>

    <button class="flex items-center justify-center px-3 py-2 mt-4 mx-auto text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
        Next step
    </button>
</form>

