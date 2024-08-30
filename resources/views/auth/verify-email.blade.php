<x-layouts.app title="Verify Email" :header="false">
    <div class="flex justify-center pt-72">
        <div class="bg-background dark:border-white/10 shadow dark:shadow-gray-500/5 sm:rounded-lg w-fit">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-base font-semibold leading-6 text-gray-900">Almost there! Please verify your email.</h3>
                <div class="mt-2 max-w-xl text-sm text-gray-500">
                    <p>Verifying your email address... We've sent an email to the address you provided. Please click the
                        confirmation link in that email to activate your account and access all the features of our
                        site.</p>
                </div>
                <div class="mt-5 flex max-sm:flex-col max-sm:gap-4 sm:justify-between sm:items-end">
                    <livewire:auth.send-verification-email />

                    <form action="{{ route('auth.logout') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <x-form.button-underline>Log out</x-form.button-underline>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.app>
