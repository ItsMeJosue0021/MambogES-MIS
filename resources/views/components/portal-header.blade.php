<div class="w-full fixed z-50 border-b border-gray-200 bg-white">
    <div class="navbar flex justify-between items-center w-full max-w-[1400px] mx-auto px-4 ">
        <div class="flex items-center">
            <div class="flex md:hidden items-center py-2 mb-2">
                <button class="px-2 py-1 rounded hover:bg-gray-100" type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
                    <i class='bx bx-menu text-4xl text-gray-700'></i>
                </button>
            </div>
        </div>

        <div class="flex items-center space-x-2">
            <x-dropdown width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center border border-transparent text-sm font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div class="flex items-center space-x-2">
                            <div>
                                <h1 class="poppins">{{ Auth::user()->profile->firstName }}
                                    {{ Auth::user()->profile->lastName }}</h1>
                            </div>
                            <img class="h-10 w-10 rounded-full border bprder-gray-200"
                                src="{{ Auth::user()->profile->image ? asset('storage/' . Auth::user()->profile->image) : asset('image/mamboges.jpg') }}"
                                alt="">
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content" class=" ">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>
</div>
