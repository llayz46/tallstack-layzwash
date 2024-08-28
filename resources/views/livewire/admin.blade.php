<div>
    <x-nav.dashboard.header-dashboard/>

    <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
        <div>
            <h2 class="text-base font-semibold leading-7 text-gray-700">Add a new product</h2>
            <p class="mt-1 text-sm leading-6 text-gray-500">Add a new product to the shop</p>
        </div>

        <form class="md:col-span-2" wire:submit.prevent="create" method="post" enctype="multipart/form-data">
            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                <div class="col-span-full">
                    <label for="product_name" class="block text-sm font-medium leading-6 text-gray-700">Product name</label>
                    <x-form.input-text wire:model.defer="product_name" type="text" id="product_name" placeholder="Gentle Snow Foam" field="product_name"/>
                </div>

                <div class="col-span-full">
                    <x-textarea label="Product description" placeholder="Gentle snow foam is a prewash shampoo wax safe which offers a good cleaning..."/>
                </div>

                <div class="col-span-full">
                    <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-700">Confirm password</label>
                    <x-form.input-text wire:model.defer="passwordForm.new_password_confirmation" type="password" id="new_password_confirmation" field="passwordForm.new_password_confirmation"/>
                </div>
            </div>

            <div class="mt-8 flex">
                <x-form.button-submit class="!w-fit">Change password</x-form.button-submit>
            </div>
        </form>
    </div>
</div>
