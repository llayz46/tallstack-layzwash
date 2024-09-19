<main>
    <x-nav.dashboard.header-dashboard/>

    <div class="mt-16">
        <h2 class="sr-only">Order number #{{ $this->order->id }}</h2>
        <div class="mx-auto max-w-7xl sm:px-2 lg:px-8">
            <div class="mx-auto max-w-2xl space-y-8 sm:px-4 lg:max-w-4xl lg:px-0">
                <div class="border-b border-t border-gray-200 bg-white shadow-sm sm:rounded-lg sm:border">
                    <h3 class="sr-only">Order placed on <time datetime="{{ $this->order->created_at->format('Y-m-d') }}">{{ $this->order->created_at->format('D m, Y') }}</time></h3>

                    <x-order.order-header :view-order="false" :order="$this->order"/>

                    <!-- Products -->
                    <h4 class="sr-only">Items</h4>
                    <ul role="list" class="divide-y divide-gray-200">
                        @foreach($this->order->items as $item)
                            <div x-data="{ addReviewModal: false }"
                                 x-init="
                                      $watch('addReviewModal', function(value){
                                          if(value === true){
                                              document.body.classList.add('overflow-hidden');
                                          }else{
                                              document.body.classList.remove('overflow-hidden');
                                          }
                                      });
                                      Livewire.on('published', () => {
                                          addReviewModal = false;
                                      });
                                 " @keydown.escape="addReviewModal=false">

                                <x-order.item-card :$item/>

                                <template x-teleport="body">
                                    <div
                                        x-show="addReviewModal"
                                        x-transition:enter="transition ease-out duration-100"
                                        x-transition:enter-start="opacity-0"
                                        x-transition:enter-end="opacity-100"
                                        x-transition:leave="transition ease-in duration-100"
                                        x-transition:leave-start="opacity-100"
                                        x-transition:leave-end="opacity-0"
                                        class="flex justify-center fixed inset-0 z-[99] w-screen h-screen bg-white"
                                    >
                                        <button @click="addReviewModal=false" class="absolute top-0 right-0 z-30 flex items-center justify-center px-3 py-2 mt-3 mr-3 space-x-1 text-xs font-medium uppercase border rounded-md border-neutral-200 text-neutral-600 hover:bg-neutral-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" /></svg>
                                            <span>Close</span>
                                        </button>

                                        <livewire:review.create.create-review :item="$item->product->id"/>
                                    </div>
                                </template>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>
