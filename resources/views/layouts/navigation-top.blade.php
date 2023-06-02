<nav x-data="{ open: false }" class="bg-blue-900 border-b border-blue-900">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-row-reverse h-12">

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-blue-900 hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>LAN</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="'#'">
                            EN
                        </x-dropdown-link>
                        <x-dropdown-link :href="'#'">
                            ES
                        </x-dropdown-link>
                        <x-dropdown-link :href="'#'">
                            FR
                        </x-dropdown-link>

                    </x-slot>
                </x-dropdown>
            </div>

            <div class="space-x-4 mt-3 text-white">
                <a href="#" ><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#" ><i class="fa-brands fa-linkedin"></i></a>
                <a href="#" ><i class="fa-brands fa-twitter"></i></a>
            </div>
        </div>
    </div>
</nav>
