<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <a href="{{ route('home') }}" wire:navigate>
            <x-application-logo class="mx-auto h-10 w-auto text-primary-500"/>
        </a>
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Create a new account</h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" method="POST" wire:submit.prevent="register">
            <div class="flex w-full gap-3">
                <div class="w-1/2">
                    <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                    <x-form.input-text wire:model.blur="form.first_name" type="text" id="first_name" field="form.first_name" placeholder="John"/>
                </div>

                <div class="w-1/2">
                    <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                    <x-form.input-text wire:model.blur="form.last_name" type="text" id="last_name" field="form.last_name" placeholder="Doe"/>
                </div>
            </div>

            <div>
                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                <x-form.input-text wire:model.blur="form.email" type="email" id="email" field="form.email" placeholder="mail@example.com"/>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                <x-form.input-text wire:model.defer="form.password" type="password" id="password" field="form.password" placeholder="Must be at least 8 characters"/>
            </div>

            <div>
                <label for="password_confirmation" class="block text-sm font-medium leading-6 text-gray-900">Confirm password</label>
                <x-form.input-text wire:model.blur="form.password_confirmation" type="password" id="password_confirmation" field="form.password_confirmation"/>
            </div>

            <x-form.button-submit>Sign up</x-form.button-submit>
        </form>

        <p class="mt-10 text-center text-sm text-gray-500">
            Already a member?
            <a href="{{ route('auth.login') }}" class="font-semibold leading-6 text-primary-600 hover:text-primary-500" wire:navigate>Sign in to your account</a>
        </p>
    </div>
</div>
