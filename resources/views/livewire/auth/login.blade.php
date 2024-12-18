<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="{{ route('home') }}" wire:navigate>
            <x-application-logo class="mx-auto h-10 w-auto text-primary-500"/>
        </a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST" wire:submit.prevent="login">
            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <x-form.input-text wire:model.blur="form.email" type="email" id="email" field="form.email"/>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <x-form.input-text wire:model="form.password" type="password" id="password" field="form.password"/>
            </div>

            <div>
                <x-form.input-checkbox wire:model="form.remember">Remember me</x-form.input-checkbox>
            </div>

            <x-form.button-submit class="items-center">
                <svg wire:loading wire:target="login" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Sign in
            </x-form.button-submit>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Not a member?
            <a href="{{ route('auth.register') }}" class="font-semibold leading-6 text-primary-600 hover:text-primary-500" wire:navigate>Create a new account</a>
        </p>
    </div>
</div>
