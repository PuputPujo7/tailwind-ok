<header class="fixed w-full top-0 z-50">
    <nav class="z-100 relative mb-5" x-data="{ open: false, menu: false, lokasi: false }">
        <div class="relative z-100 bg-blue-200 shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0 bg-blue-200">
                        <a class="flex-shrink-0" href="#">
                            {{-- <img class="block lg:hidden h-12 w-16" src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small.png" alt="Logo">
            <img class="hidden lg:block h-12 w-auto" src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small_gray.png" alt="Logo"> --}}
                            <img class="block lg:hidden h-12 w-16" src="img/logo.jpg" alt="Logo">
                            <img class="hidden lg:block h-12 w-auto" src="img/logo.jpg" alt="Logo">
                        </a>
                        {{-- <div class="hidden lg:block lg:ml-2 bg-blue-200">
                            <div class="flex">
                                <a href="/"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Home </a>
                                <a href="/schedule"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Schedule </a>
                                <a href="/gallery"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Gallery </a>
                                <a href="/report"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Report </a>
                                    <a href="/guest"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Guest </a>
                                    <a href="/contact"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Contact </a>
                                    <a href="/coba"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Coba </a>
                            </div>
                        </div> --}}

                        <div class="filters sm-hidden hidden lg:block lg:ml-2">
                            <div class="mx-auto flex  w-full justify-center pt-4 sm:max-w-[640px] md:max-w-[768px] lg:max-w-[1024px] xl:max-w-[1280px] 2xl:max-w-[1536px]">
                                <div x-data="filters()" @reset="reset = $event.detail.reset, filterCounter = 0">
                                    <div class="flex flex-wrap items-center">
                                        <div class="flex items-start">
                                            
                                            <a href="/"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Home </a>
                                            <div class="mb-3" x-ref="myFilter" x-data="{
                                                show: false,
                                                counter: 0,
                                                }" @reset.window="counter = 0">
                                                <button id="dropdownDefault" data-dropdown-toggle="dropdown" x-on:click="open" type="button"
                                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700">
                                                    Type
                                                    <span x-show="counter" x-text="counter"
                                                        class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm"
                                                        style="display: none">0</span>
                                                    <i class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                                                </button>
                                                <div x-show="isOpen()" x-on:click.away="close"
                                                    class="w-46 shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg "
                                                    data-popper-placement="bottom" style="display: none">
                                                    <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                                        <li x-data="{
                                                            checked: false
                                                        }" @reset.window="checked = false">
                                                        <a href="/schedule"
                                                        class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                        Schedule </a>
                                                       
                                                        </li>
                        
                                                        <li x-data="{
                                                            checked: false
                                                        }" @reset.window="checked = false">
                                                        
                                                        <a href="/gallery"
                                                        class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                                        Gallery </a>
                                                        </li>
                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <a href="/schedule"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Schedule </a>
                                            <a href="/gallery"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Gallery </a>
                                            <a href="/report"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Report </a>
                                            <a href="/guest"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Guest </a>
                                            <a href="/contact"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Contact </a>
                                            <a href="/coba"
                                            class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                            Coba </a>       
                        
                                            {{-- <div>
                                                <button @click="$dispatch( 'reset', { reset : !reset } )" x-show="filterCounter"
                                                    class="mb-3 ml-4 flex min-h-[3rem] items-center justify-between rounded-md bg-stone-500 px-4 py-2 text-stone-50"
                                                    style="display: none">
                                                    <i class="fas fa-times pr-2 group-hover:text-white"></i>
                                                    Reset
                                                </button>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function filters() {
                                    return {
                                        filterCounter: 0,
                                        reset: false,
                                        resetCounter: false,
                                        open() {
                                            this.show = true;
                                        },
                                        close() {
                                            this.show = false;
                                        },
                        
                                        isOpen() {
                                            return this.show === true;
                                        },
                        
                                        count() {
                                            this.show = false;
                                            this.checked = !this.checked;
                                            if (this.checked) {
                                                this.counter = this.counter + 1;
                                                this.filterCounter = this.filterCounter + 1;
                                            } else if (!this.checked) {
                                                this.counter = this.counter - 1;
                                                this.filterCounter = this.filterCounter - 1;
                                            }
                                        },
                                    };
                                }
                            </script>
                        </div>

                    </div>
                    <div class="flex-1 flex justify-center px-2 lg:ml-6 lg:justify-end">
                        <div class="max-w-lg w-full lg:max-w-xs">
                            <label for="search" class="sr-only">Search </label>
                            <form methode="get" action="#" class="relative z-50">
                                <button type="submit" id="searchsubmit"
                                    class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                                <input type="text" name="s" id="s"
                                    class="block w-full pl-10 pr-3 py-2 border border-transparent rounded-md leading-5 bg-grey-200 text-gray-300 placeholder-gray-400 focus:outline-none focus:bg-white focus:text-gray-900 sm:text-sm transition duration-150 ease-in-out"
                                    placeholder="Search">
                            </form>
                        </div>
                        <button type="button"
                            class="hidden lg:block lg:ml-2 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                            <span class="sr-only">View notifications</span>
                            <!-- Heroicon name: outline/bell -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                        </button>
                        <!-- User Profile -->
                        <div>
                            <div class="flex gap-2 items-center justify-between">
                                <div class="flex-1 filament-breadcrumbs">
                            
                            </div>
                            
                                <div wire:id="zVMZQuUYqjFCy7Fgfu3q" class="flex items-center filament-global-search">
                            
                            
                            
                            
                            </div>
                            
                            <!-- Livewire Component wire-end:zVMZQuUYqjFCy7Fgfu3q -->
                                <div x-data="{
                            isOpen: false,
                            
                            mode: null,
                            
                            theme: null,
                            
                            init: function () {
                            this.theme = localStorage.getItem('theme') || (this.isSystemDark() ? 'dark' : 'light')
                            this.mode = localStorage.getItem('theme') ? 'manual' : 'auto'
                            
                            window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
                            if (this.mode === 'manual') return
                            
                            if (event.matches &amp;&amp; (! document.documentElement.classList.contains('dark'))) {
                            this.theme = 'dark'
                            
                            document.documentElement.classList.add('dark')
                            } else if ((! event.matches) &amp;&amp; document.documentElement.classList.contains('dark')) {
                            this.theme = 'light'
                            
                            document.documentElement.classList.remove('dark')
                            }
                            })
                            
                            $watch('theme', () => {
                            if (this.mode === 'auto') return
                            
                            localStorage.setItem('theme', this.theme)
                            
                            if (this.theme === 'dark' &amp;&amp; (! document.documentElement.classList.contains('dark'))) {
                            document.documentElement.classList.add('dark')
                            } else if (this.theme === 'light' &amp;&amp; document.documentElement.classList.contains('dark')) {
                            document.documentElement.classList.remove('dark')
                            }
                            
                            $dispatch('dark-mode-toggled', this.theme)
                            })
                            },
                            
                            isSystemDark: function () {
                            return window.matchMedia('(prefers-color-scheme: dark)').matches
                            },
                            }" class="relative">
                            <button x-on:click="isOpen = ! isOpen" class="block flex-shrink-0 w-10 h-10 rounded-full bg-gray-200 bg-cover bg-center" style="background-image: url('https://ui-avatars.com/api/?name=P&amp;color=FFFFFF&amp;background=111827')"></button>
                            
                            <div x-show="isOpen" x-on:click.away="isOpen = false" x-transition:enter="transition" x-transition:enter-start="-translate-y-1 opacity-0" x-transition:enter-end="translate-y-0 opacity-100" x-transition:leave="transition" x-transition:leave-start="translate-y-0 opacity-100" x-transition:leave-end="-translate-y-1 opacity-0" class="absolute z-10 right-0 rtl:right-auto rtl:left-0 mt-2 shadow-xl rounded-xl w-52 top-full" style="">
                            <ul class="py-1 space-y-1 overflow-hidden bg-white shadow rounded-xl">
                            
                            <li>
                            <a class="flex items-center w-full h-8 px-3 text-sm font-medium group whitespace-nowrap filament-dropdown-item">
                                    {{-- <svg class="mr-2 -ml-1 w-6 h-6 flex-shrink-0 rtl:ml-2 rtl:-mr-1 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z" clip-rule="evenodd"></path>
                            </svg>             --}} <img class="rounded-full w-9 h-9 max-w-none" alt="A"
            src="img/head-avatar.png" />
                            <span class="truncate">
                            Pujo1
                            </span>
                            
                            </a>
                            </li>
                            
                            <div>
                                    </div>
                            
                            
                            <li>
                            {{-- <form action="" method="get"> --}}
                                <a href="/login">
                            {{-- <input type="hidden" name="_token" value="8DXNTE7wYQOAWywL8De6Q7QmauRQQV8EutiJoCBh"> --}}
                            {{-- <button type="submit" class="flex items-center w-full h-8 px-3 text-sm font-medium group whitespace-nowrap filament-dropdown-item focus:outline-none hover:text-white focus:text-white hover:bg-primary-600 focus:bg-primary-700"> --}}
                            <button type="submit" class="flex items-center w-full h-8 px-3 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700">
                                            <svg class="mr-2 -ml-1 w-6 h-6 flex-shrink-0 rtl:ml-2 rtl:-mr-1 group-hover:text-white group-focus:text-white text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                            </svg>                
                            <span class="truncate">
                            Sign out
                            </span>
                            
                                    </button></a>
                            {{-- </form> --}}
                            </li>
                            </ul>
                            </div>
                            </div>
                            </div>
                            {{-- <button type="button"
                                class="hidden lg:block lg:ml-2 p-1 bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="" alt="">
                            </button> --}}
                            <!-- component -->
                            {{-- <div class="hidden lg:block lg:ml-2 group inline-block z0 hover:z-50">
                                <button
                                    class="hidden lg:block lg:ml-2 p-1 bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true"> --}}
                                    {{-- <span class="pr-1 font-semibold flex-1">Dropdown</span> --}}
                                    {{-- <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="img/head-avatar.png" alt=""> --}}
                                    {{-- <span>
                                        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
          transition duration-150 ease-in-out"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span> --}}
                                {{-- </button>
                                <ul
                                    class="bg-white border rounded-sm transform scale-0 group-hover:scale-100 absolute transition duration-150 ease-in-out origin-top min-w-32">
                                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Programming</li>
                                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">DevOps</li>
                                    <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
                                        <button
                                            class="w-full text-left flex items-center outline-none focus:outline-none">
                                            <span class="pr-1 flex-1">Langauges</span>
                                            <span class="mr-auto">
                                                <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                    <path
                                                        d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                </svg>
                                            </span>
                                        </button>
                                        <ul
                                            class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                            <li class="px-3 py-1 hover:bg-gray-100">Javascript</li>
                                            <li class="rounded-sm relative px-3 py-1 hover:bg-gray-100">
                                                <button
                                                    class="w-full text-left flex items-center outline-none focus:outline-none">
                                                    <span class="pr-1 flex-1">Python</span>
                                                    <span class="mr-auto">
                                                        <svg class="fill-current h-4 w-4 transition duration-150 ease-in-out"
                                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                            <path
                                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                                        </svg>
                                                    </span>
                                                </button>
                                                <ul
                                                    class="bg-white border rounded-sm absolute top-0 right-0 transition duration-150 ease-in-out origin-top-left min-w-32">
                                                    <li class="px-3 py-1 hover:bg-gray-100">2.7</li>
                                                    <li class="px-3 py-1 hover:bg-gray-100">3+</li>
                                                </ul>
                                            </li>
                                            <li class="px-3 py-1 hover:bg-gray-100">Go</li>
                                            <li class="px-3 py-1 hover:bg-gray-100">Rust</li>
                                        </ul>
                                    </li>
                                    <li class="rounded-sm px-3 py-1 hover:bg-gray-100">Testing</li>
                                </ul> --}}
                            </div>

                            <style>
                                /* since nested groupes are not supported we have to use
       regular css for the nested dropdowns
    */
                                li>ul {
                                    transform: translatex(100%) scale(0)
                                }

                                li:hover>ul {
                                    transform: translatex(101%) scale(1)
                                }

                                li>button svg {
                                    transform: rotate(-90deg)
                                }

                                li:hover>button svg {
                                    transform: rotate(-270deg)
                                }

                                /* Below styles fake what can be achieved with the tailwind config
       you need to add the group-hover variant to scale and define your custom
       min width style.
         See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
         for implementation with config file
    */
                                .group:hover .group-hover\:scale-100 {
                                    transform: scale(1)
                                }

                                .group:hover .group-hover\:-rotate-180 {
                                    transform: rotate(180deg)
                                }

                                .scale-0 {
                                    transform: scale(0)
                                }

                                .min-w-32 {
                                    min-width: 8rem
                                }
                            </style>
                        </div>
                        <form class="relative z-50">
                            <a href="/login"
                                class="hidden lg:block lg:ml-2 block w-auto px-3 p-2 items-center text-center text-gray-600 transition-colors duration-500 transform border rounded-lg dark:text-gray-300 dark:border-gray-300 hover:bg-yellow-100 dark:hover:bg-gray-700 focus:outline-none bg-white">Login</a>
                        </form>
                    </div>
                    <div class="flex lg:hidden">
                        <button @click="menu=!menu"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-yellow-500 focus:outline-none focus:bg-yellow-700 focus:text-white transition duration-150 ease-in-out"
                            aria-label="Main menu" aria-expanded="false">
                            <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 6h16M4 12h16M4 18h16"></path>
                            </svg>
                            <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div x-show="menu" class="block md:hidden bg-blue-100">
                {{-- <div class="px-2 pt-2 pb-3"> --}}
                    <div x-data="filters()" @reset="reset = $event.detail.reset, filterCounter = 0">
                        
                                <a href="/"
                                class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                Home </a>
                                <div class="mb-3" x-ref="myFilter" x-data="{
                                    show: false,
                                    counter: 0,
                                    }" @reset.window="counter = 0">
                                    <button id="dropdownDefault" data-dropdown-toggle="dropdown" x-on:click="open" type="button"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Type
                                        <span x-show="counter" x-text="counter"
                                            class="bg-green-500 text-green-100 card-pills--counter ml-2 rounded-md px-2 py-1 text-sm"
                                            style="display: none">0</span>
                                        <i class="fas fa-angle-down pl-3 text-stone-700 dark:text-stone-300"></i>
                                    </button>
                                    <div x-show="isOpen()" x-on:click.away="close"
                                        class="w-46 shadow-stone-55 absolute z-10 divide-y divide-gray-100 overflow-hidden rounded-md bg-white shadow-lg "
                                        data-popper-placement="bottom" style="display: none">
                                        <ul class="text-gray-700" aria-labelledby="dropdownDefault">
                                            <li x-data="{
                                                checked: false
                                            }" @reset.window="checked = false">
                                            <a href="/schedule"
                                            class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                            Schedule </a>
                                           
                                            </li>
            
                                            <li x-data="{
                                                checked: false
                                            }" @reset.window="checked = false">
                                            
                                            <a href="/gallery"
                                            class="group flex w-full items-center justify-between px-4 py-2 hover:bg-yellow-500 hover:text-stone-300">
                                            Gallery </a>
                                            </li>
            
                                        </ul>
                                    </div>
                                    <a href="/schedule"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Schedule</a>
                                    <a href="/gallery"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Gallery</a>
                                    <a href="/report"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Report</a>
                                    <a href="/guest"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Guest</a>
                                    <a href="/contact"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Contact</a>
                                    <a href="/coba"
                                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                                        Coba</a>
                                </div>
                             
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>