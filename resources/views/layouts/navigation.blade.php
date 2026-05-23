<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">

    <!-- Primary Navigation -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">

            <!-- Left -->
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Nav Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Right -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">

                @auth
                <!-- Dropdown -->
                <x-dropdown align="right" width="48">

                    <!-- Trigger -->
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white hover:text-gray-700">

                            <div>{{ auth()->user()->name }}</div>

                            <div class="ms-1">
                                <svg class="h-4 w-4 fill-current" viewBox="0 0 20 20">
                                    <path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"/>
                                </svg>
                            </div>

                        </button>
                    </x-slot>

                    <!-- Dropdown Content -->
                    <x-slot name="content">

                        <div class="px-4 py-2 text-sm text-gray-700">
                            {{ auth()->user()->email }}
                        </div>

                        <x-dropdown-link :href="route('profile.edit')">
                            Profile
                        </x-dropdown-link>

                        <!-- Logout -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link href="#"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                Logout
                            </x-dropdown-link>
                        </form>

                    </x-slot>
                </x-dropdown>
                @endauth

                @guest
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 mx-2">Login</a>
                    <a href="{{ route('register') }}" class="text-sm text-gray-700">Register</a>
                @endguest

            </div>

            <!-- Mobile Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="p-2 text-gray-400 hover:text-gray-500">
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open}" stroke="currentColor" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16"/>
                        <path :class="{'hidden': !open}" stroke="currentColor" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')">
                Dashboard
            </x-responsive-nav-link>
        </div>

        <!-- Mobile User Info -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            @auth
            <div class="px-4">
                <div class="text-base font-medium text-gray-800">
                    {{ auth()->user()->name }}
                </div>
                <div class="text-sm text-gray-500">
                    {{ auth()->user()->email }}
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    Profile
                </x-responsive-nav-link>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-responsive-nav-link href="#"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        Logout
                    </x-responsive-nav-link>
                </form>
            </div>
            @endauth

            @guest
            <div class="px-4 py-2">
                <a href="{{ route('login') }}" class="block">Login</a>
                <a href="{{ route('register') }}" class="block">Register</a>
            </div>
            @endguest

        </div>
    </div>

</nav>