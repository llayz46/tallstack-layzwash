<main>
    <header class="border-b border-gray-200">
        <!-- Secondary navigation -->
        <nav class="flex overflow-x-auto py-4">
            <ul role="list" class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-400 sm:px-6 lg:px-8">
                <li>
                    <x-nav.dashboard.header-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav.dashboard.header-link>
                </li>
                <li>
                    <x-nav.dashboard.header-link :active="$this->isActive" href="{{ route('account') }}">Account</x-nav.dashboard.header-link>
                </li>
            </ul>
        </nav>
    </header>

    <!-- Settings forms -->
    <div class="divide-y divide-white/5">
        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-700">Personal Information</h2>
                <p class="mt-1 text-sm leading-6 text-gray-500">Use a permanent address where you can receive mail.</p>
            </div>

            <form class="md:col-span-2" wire:submit.prevent="save" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                    <div class="col-span-full flex items-center gap-x-8">
                        @if($form->avatar)
                            <img src="{{ $form->avatar->temporaryUrl() }}" alt="" class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover">
                        @elseif($user->avatar)
                            <img src="{{ asset('storage/' . $user->avatar) }}" alt="" class="h-24 w-24 flex-none rounded-lg bg-gray-800 object-cover">
                        @endif
                        <div>
                            <button type="button" class="relative overflow-hidden rounded-md px-3 py-2 text-sm cursor-pointer font-semibold text-white shadow-sm bg-gray-700 hover:bg-gray-800">
                                <input type="file" wire:model.defer="form.avatar" id="avatar" class="cursor-pointer absolute left-0 top-0 right-0 bottom-0 opacity-0">
                                Change avatar
                            </button>
                            <p class="mt-2 text-xs leading-5 text-gray-500">JPG, WEBP or PNG. 2MB max.</p>
                            @error('form.avatar')
                                <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-6 text-gray-700">First name</label>
                        <x-form.input-text wire:model.defer="form.first_name" type="text" id="first_name" field="form.first_name"/>
                    </div>

                    <div class="sm:col-span-3">
                        <label for="last_name" class="block text-sm font-medium leading-6 text-gray-700">Last name</label>
                        <x-form.input-text wire:model.defer="form.last_name" type="text" id="last_name" field="form.last_name"/>
                    </div>

                    <div class="col-span-full">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-700">Email address</label>
                        <x-form.input-text wire:model.defer="form.email" type="email" id="email" field="form.email"/>
                    </div>
                </div>

                <div class="mt-8 flex">
                    <x-form.button-submit class="!w-fit">Update</x-form.button-submit>
                </div>
            </form>
        </div>

        <x-separator/>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-700">Change password</h2>
                <p class="mt-1 text-sm leading-6 text-gray-500">Update your password associated with your account.</p>
            </div>

            <form class="md:col-span-2" wire:submit.prevent="changePassword" method="post" enctype="multipart/form-data">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:max-w-xl sm:grid-cols-6">
                    <div class="col-span-full">
                        <label for="current_password" class="block text-sm font-medium leading-6 text-gray-700">Current password</label>
                        <x-form.input-text wire:model.defer="passwordForm.current_password" autocomplete="current-password" type="password" id="current_password" field="passwordForm.current_password"/>
                    </div>

                    <div class="col-span-full">
                        <label for="new_password" class="block text-sm font-medium leading-6 text-gray-700">New password</label>
                        <x-form.input-text wire:model.defer="passwordForm.new_password" placeholder="Must be at least 8 characters" autocomplete="new-password" type="password" id="new_password" field="passwordForm.new_password"/>
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

        <x-separator/>

        <div class="grid max-w-7xl grid-cols-1 gap-x-8 gap-y-10 px-4 py-16 sm:px-6 md:grid-cols-3 lg:px-8">
            <div>
                <h2 class="text-base font-semibold leading-7 text-gray-700">Delete account</h2>
                <p class="mt-1 text-sm leading-6 text-gray-500">No longer want to use our service? You can delete your account here. This action is not reversible. All information related to this account will be deleted permanently.</p>
            </div>

            <div class="flex items-start md:col-span-2" x-data="{ destroyAccount: false }">
                <button class="rounded-md bg-red-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-400" @click="destroyAccount = true">Yes, delete my account</button>
                <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="destroyAccount">
                    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
                         x-cloak
                         x-transition:enter="ease-out duration-300"
                         x-transition:enter-start="opacity-0"
                         x-transition:enter-end="opacity-100"
                         x-transition:leave="ease-in duration-200"
                         x-transition:leave-start="opacity-100"
                         x-transition:leave-end="opacity-0"></div>

                    <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
                        <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                            <form wire:submit.prevent="destroy" class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg"
                                 x-show="destroyAccount" x-cloak
                                 x-transition:enter="ease-out duration-300"
                                 x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                                 x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave="ease-in duration-200"
                                 x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                                 x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95">
                                <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                                    <div class="sm:flex sm:items-start">
                                        <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                            <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                            </svg>
                                        </div>
                                        <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                            <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Deactivate account</h3>
                                            <div class="mt-2">
                                                <p class="text-sm text-gray-500">Are you sure you want to deactivate your account? All of your data will be permanently removed. This action cannot be undone.</p>
                                                <label for="deleteForm.password" class="block mt-3 text-sm font-medium leading-6 text-gray-700">Confirm your password</label>
                                                <x-form.input-text wire:model.defer="deleteForm.password" type="password" id="deleteForm.password" field="deleteForm.password"/>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                                    <button type="submit"
                                            class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">
                                        Deactivate
                                    </button>
                                    <button type="button" class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto" @click="destroyAccount = false">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
