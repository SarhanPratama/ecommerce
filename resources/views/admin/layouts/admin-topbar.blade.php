<!-- Start Header -->
<header
    class="sticky top-0 z-40 flex h-18 w-full border-b border-default-200/95 bg-white/95 backdrop-blur-sm dark:bg-default-50/95 print:hidden">
    <nav class="flex w-full items-center gap-4 px-6">
        <!-- Navigation Toggle (in Small Screen) -->
        <div class="flex lg:hidden">
            <button type="button" class="text-default-500 hover:text-default-600" data-hs-overlay="#application-sidebar"
                aria-controls="application-sidebar" aria-label="Toggle navigation">
                <i data-lucide="align-justify" class="h-6 w-6"></i>
            </button>
        </div>

        <!-- Logo -->
        <div class="flex lg:hidden">
            {{-- <a href="{{ route('second' ,['admin', 'dashboard']) }}">
                <img src="/images/logo-dark.png" alt="logo" class="flex h-10 w-full dark:hidden" />
                <img src="/images/logo.png" alt="logo" class="hidden h-10 w-full dark:flex" />
            </a> --}}
        </div>

        <!-- Search Input -->
        {{-- <div class="hidden lg:flex">
            <label for="icon" class="sr-only">Search</label>
            <div class="relative hidden lg:flex">
                <input type="search"
                    class="block rounded-full border-default-200 bg-default-50 py-2.5 pe-4 ps-12 text-sm text-default-800 focus:border-primary focus:ring-primary lg:w-64"
                    placeholder="Search for items..." />
                <i class="ti ti-search absolute start-4 top-1/2 -translate-y-1/2 text-lg text-default-600"></i>
            </div>
        </div> --}}

        <!-- Topbar Link and Dropdown Button -->
        <div class="ms-auto flex items-center gap-4">
            <button
                class="relative inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 overflow-hidden rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
                <i class="ti ti-sun text-xl after:absolute after:inset-0" id="light-theme"></i>
                <i class="ti ti-moon text-xl after:absolute after:inset-0" id="dark-theme"></i>
            </button>

            <!-- Language -->
            <div class="hidden lg:flex">
                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                    <button id="hs-dropdown-with-header" type="button"
                        class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
                        <i class="ti ti-language text-xl"></i>
                    </button>

                    <div
                        class="hs-dropdown-menu duration mt-2 hidden min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                        <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100"
                            href="javascript:void(0)">
                            <img src="/images/icons/flags/germany.jpg" alt="user-image" class="h-4" />
                            <span class="align-middle">German</span>
                        </a>
                        <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100"
                            href="javascript:void(0)">
                            <img src="/images/icons/flags/italy.jpg" alt="user-image" class="h-4" />
                            <span class="align-middle">Italian</span>
                        </a>
                        <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100"
                            href="javascript:void(0)">
                            <img src="/images/icons/flags/spain.jpg" alt="user-image" class="h-4" />
                            <span class="align-middle">Spanish</span>
                        </a>
                        <a class="flex items-center gap-x-3.5 rounded px-3 py-2 text-sm font-medium transition-all hover:bg-default-100"
                            href="javascript:void(0)">
                            <img src="/images/icons/flags/russia.jpg" alt="user-image" class="h-4" />
                            <span class="align-middle">Russian</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Fullscreen Button -->
            <div class="hidden lg:flex">
                <button data-toggle="fullscreen"
                    class="inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle font-medium text-default-700 transition-all hover:text-primary">
                    <i class="ti ti-maximize flex text-xl group-[-fullscreen]:hidden"></i>
                    <i class="ti ti-minimize hidden text-xl group-[-fullscreen]:flex"></i>
                </button>
            </div>

            <!-- Notification Dropdown -->
            <div class="hidden md:flex">
                <div class="hs-dropdown relative inline-flex [--placement:bottom-right]">
                    <button id="hs-dropdown-with-header" type="button"
                        class="hs-dropdown-toggle inline-flex h-10 w-10 flex-shrink-0 items-center justify-center gap-2 rounded-full bg-default-100 align-middle text-xs font-medium text-default-700 transition-all hover:text-primary">
                        <i class="ti ti-bell animate-ring text-xl"></i>
                        <!-- <span class="absolute top-0 end-1 h-4 w-4 bg-red-500 rounded-full animate-ping"></span> -->
                        <!-- <span class="absolute top-0 end-1 h-4 w-4 flex justify-center items-center bg-red-500 text-[11px] font-semibold text-white rounded-full">2</span> -->
                    </button>

                    <div
                        class="hs-dropdown-menu duration mt-2 hidden min-w-[20rem] rounded-lg border border-default-200 bg-white opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                        <div class="flex items-center justify-between px-4 py-2">
                            <h6 class="text-sm font-medium">Notification</h6>
                            <a href="javascript: void(0);" class="text-default-500">
                                <small>Clear All</small>
                            </a>
                        </div>

                        <div class="h-80 border-y border-dashed border-default-200 p-4" data-simplebar>
                            <h5 class="mb-2 text-xs text-default-700">Today</h5>

                            <a href="javascript:void(0);" class="mb-4 flex items-center">
                                <img src="/images/avatars/1.png" class="h-10 w-10 rounded-full" />
                                <div class="ms-2 flex-grow truncate">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-default-800">
                                            Datacorp
                                        </h5>
                                        <small class="inline-flex text-xs text-default-500">1 min ago</small>
                                    </div>
                                    <small class="text-default-400">Caleb Flakelar commented on Admin</small>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="mb-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/avatars/2.png" class="h-10 w-10 rounded-full" />
                                </div>
                                <div class="ms-2 flex-grow truncate">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-default-800">Admin</h5>
                                        <small class="inline-flex text-xs text-default-500">1 hr ago</small>
                                    </div>
                                    <small class="text-default-400">New user registered</small>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="mb-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/avatars/3.png" class="h-10 w-10 rounded-full" />
                                </div>
                                <div class="ms-2 flex-grow truncate">
                                    <div class="flex items-center justify-between">
                                        <h5 class="text-sm font-medium text-default-800">
                                            Cristina Pride
                                        </h5>
                                        <small class="inline-flex text-xs text-default-500">1 day ago</small>
                                    </div>
                                    <small class="text-default-400">Hi, How are you? What about our next meeting</small>
                                </div>
                            </a>

                            <h5 class="mb-2 text-xs text-default-700">Yesterday</h5>

                            <a href="javascript:void(0);" class="mb-4 flex items-center">
                                <div class="flex-shrink-0">
                                    <img src="/images/avatars/4.png" class="h-10 w-10 rounded-full" />
                                </div>
                                <div class="ms-2 flex-grow truncate">
                                    <h5 class="mb-1 text-sm font-semibold">Datacorp</h5>
                                    <small class="text-default-400">Caleb Flakelar commented on Admin</small>
                                </div>
                            </a>

                            <a href="javascript:void(0);" class="flex">
                                <div class="flex-shrink-0">
                                    <img src="/images/avatars/5.png" class="h-10 w-10 rounded-full" />
                                </div>
                                <div class="ms-2 flex-grow truncate">
                                    <h5 class="mb-1 text-sm font-semibold">Karen Robinson</h5>
                                    <small class="text-default-400">Wow ! this admin looks good and awesome
                                        design</small>
                                </div>
                            </a>
                        </div>

                        <a href="javascript:void(0);"
                            class="block px-4 py-2 text-center text-sm font-medium text-primary">
                            View All
                        </a>
                    </div>
                </div>
            </div>

            <!-- Profile Dropdown -->
            <div class="flex">
                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-dropdown-with-header" type="button"
                        class="hs-dropdown-toggle inline-flex flex-shrink-0 items-center justify-center gap-2 rounded-md align-middle text-xs font-medium text-default-700 transition-all">
                        <img class="inline-block h-10 w-10 rounded-full" src="/images/avatars/7.png" />
                        <div class="hidden text-start lg:block">
                            <p class="text-xs font-semibold text-default-700">Mary Hopkins</p>
                            <p class="mt-1 text-xs text-default-500">Admin</p>
                        </div>
                    </button>

                    <div
                        class="hs-dropdown-menu duration mt-2 hidden min-w-[12rem] rounded-lg border border-default-200 bg-white p-2 opacity-0 shadow-md transition-[opacity,margin] hs-dropdown-open:opacity-100 dark:bg-default-50">
                        {{-- <a
                            class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-800 transition-all hover:bg-default-100"
                            href="{{ route('second', ['admin', 'wallet']) }}">
                            <i class="ti ti-wallet text-base"></i>
                            Wallet
                        </a> --}}
                        <a class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-default-800 transition-all hover:bg-default-100"
                            href="" target="_blank">
                            <i class="ti ti-browser text-base"></i>
                            Landing
                        </a>

                        <hr class="-mx-2 my-2 border-default-200" />

                        {{-- <a
                            class="flex items-center gap-x-3.5 rounded-md px-3 py-2 text-sm font-medium text-red-500 hover:bg-red-400/10"
                            href="{{ route('second', ['auth', 'login']) }}">
                            <i class="h-4 w-4" data-lucide="log-out"></i>
                            Log out
                        </a> --}}
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- End Header -->