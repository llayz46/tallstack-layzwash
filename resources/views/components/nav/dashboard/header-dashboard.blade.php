<header {{ $attributes->class(['border-b border-gray-200']) }}>
    <!-- Secondary navigation -->
    <nav class="flex overflow-x-auto py-4">
        <ul role="list"
            class="flex min-w-full flex-none gap-x-6 px-4 text-sm font-semibold leading-6 text-gray-400 sm:px-6 lg:px-8">
            <li>
                <x-nav.dashboard.header-link :active="request()->routeIs('home')" href="{{ route('home') }}">Home</x-nav.dashboard.header-link>
            </li>
            <li>
                <x-nav.dashboard.header-link :active="$this->isAccountActive" href="{{ route('account') }}">Account</x-nav.dashboard.header-link>
            </li>
            @if(auth()->user()->isAdmin())
                <li>
                    <x-nav.dashboard.header-link :active="$this->isAdminActive" href="{{ route('admin') }}">Admin</x-nav.dashboard.header-link>
                </li>
            @endif
        </ul>
    </nav>
</header>
