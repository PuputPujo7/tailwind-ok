{{-- <!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="img/logo.jpg">
    <meta name="viewport" content="width=device-width">

    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

<body>
    <!-- This example requires Tailwind CSS v2.0+ -->

    @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

    <!-- component -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <nav class="fixed z-100 relative" x-data="{ open: false, menu: false, lokasi: false }">
        <div class="relative z-100 bg-blue-200 shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0 bg-blue-200">
                        <a class="flex-shrink-0" href="#">
                            <img class="block lg:hidden h-12 w-16" src="img/logo.jpg" alt="Logo">
                            <img class="hidden lg:block h-12 w-auto" src="img/logo.jpg" alt="Logo">
                        </a>
                        <div class="hidden lg:block lg:ml-2 bg-blue-200">
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
                                    <img class="rounded-full w-9 h-9 max-w-none" alt="A"
            src="img/head-avatar.png" />
                            <span class="truncate">
                            Pujo1
                            </span>
                            
                            </a>
                            </li>
                            
                            <div>
                                    </div>
                            
                            
                            <li>
                            
                                <a href="/login">
                           <button type="submit" class="flex items-center w-full h-8 px-3 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700">
                                            <svg class="mr-2 -ml-1 w-6 h-6 flex-shrink-0 rtl:ml-2 rtl:-mr-1 group-hover:text-white group-focus:text-white text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z" clip-rule="evenodd"></path>
                            </svg>                
                            <span class="truncate">
                            Sign out
                            </span>
                            
                                    </button></a>
                          
                            </li>
                            </ul>
                            </div>
                            </div>
                            </div>
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
                <div class="px-2 pt-2 pb-3">
                    <a href="/"
                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">
                        Home</a>
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
    </nav>
<section class="bg-blue-50">
    {{ $slot }}
</section>

        <a href="https://api.whatsapp.com/send?phone=6281229094886&text=Assalamu%27alaikum%0D%0AHi+Min%2C+saya+lihat+dari+web+asskiinah+store%0D%0Amau+order+donk%21"
        target="_blank" class="whats-app wawidget"><img src="img/whatsappbtn.png" /></a>
    </a>
    <style>
    .whats-app {
        position: fixed;
        width: 150px;
        height: 50px;
        bottom: 300px;
        /* background-color: #25d366; */
        /* color: #FFF; */
        /* border-radius: 50px; */
        text-align: center;
        font-size: 30px;
        /* box-shadow: 3px 4px 3px #999; */
        /* left: 15px; */
        right: 15px;
        z-index: 100;
    }
    
    .my-float {
        margin-top: 10px;
    }
    </style>
    


    <!-- Start Footer -->

    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    <footer class="bg-gradient-to-r from-gray-200 via-[#bce1ff] to-gray-200">
        <div class="mx-6 py-10 px-10 text-center md:text-center justify-center">
            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="">

                    <h6
                        class="flex items-center justify-center">
                        <img src="img/logo.jpg" class="lg:h-15 sm:h-10 pt-1 justify-center items-center md:justify-center"
                            alt="logo" />

                    </h6>
                    <h6
                        class="uppercase font-semibold mb-4 flex items-center justify-center md:justify-center">

                        Tailwind ELEMENTS
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:align-text-center">
                        Products
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">Angular</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">React</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">Vue</a>
                    </p>
                    <p>
                        <a href="#!" class="text-gray-600">Laravel</a>
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:align-text-center">
                        Useful links
                    </h6>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">Pricing</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">Settings</a>
                    </p>
                    <p class="mb-4">
                        <a href="#!" class="text-gray-600">Orders</a>
                    </p>
                    <p>
                        <a href="#!" class="text-gray-600">Help</a>
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:align-text-center">
                        Contact
                    </h6>
                    <p class="flex items-center justify-center md:align-text-center mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                            </path>
                        </svg>
                        New York, NY 10012, US
                    </p>
                    <p class="flex items-center justify-center md:align-text-center mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        info@example.com
                    </p>
                    <p class="flex items-center justify-center md:align-text-center mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        + 01 234 567 88
                    </p>
                    <p class="flex items-center justify-center md:align-text-center">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="print"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M448 192V77.25c0-8.49-3.37-16.62-9.37-22.63L393.37 9.37c-6-6-14.14-9.37-22.63-9.37H96C78.33 0 64 14.33 64 32v160c-35.35 0-64 28.65-64 64v112c0 8.84 7.16 16 16 16h48v96c0 17.67 14.33 32 32 32h320c17.67 0 32-14.33 32-32v-96h48c8.84 0 16-7.16 16-16V256c0-35.35-28.65-64-64-64zm-64 256H128v-96h256v96zm0-224H128V64h192v48c0 8.84 7.16 16 16 16h48v96zm48 72c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z">
                            </path>
                        </svg>
                        + 01 234 567 89
                    </p>
                    <div class="mt-5 text-2xl">
                        <p class="block uppercase text-blueGray-900 text-sm font-semibold mb-2">Subsrcibe</p>
                        <p class="mt-2 mb-4 text-gray-600 dark:text-gray-400 text-sm">Get the latest posts
                            delivered
                            right
                            to your inbox</p>
                        <div class="my-4">
                            <form id="footerForm" action="/subscribe/" method="POST" class="form-horizontal">
                                <input type="hidden" name="csrfmiddlewaretoken"
                                    value="wbn5efvaAQVWPnswLO5RNYv2pUyImMYDigHDj3NtW1PhE8g7UUv6rgYqQWq7QKyJ">
                                <input type="email" name="email" size="14"
                                    class="p-2 border border-grey-light rounded text-black placeholder-gray-400 text-sm h-auto focus:bg-white focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                    placeholder="Enter Email Address" required="required">
                                <input type="submit" id="emailBtn" value="Subscribe"
                                    class="bg-teal-500 text-white active:bg-teal-400 rounded shadow hover:shadow-lg outline-none focus:outline-none h-auto text-xs p-3">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gradient-to-r from-gray-500 via-[#bce1ff] to-gray-500 text-center p-3">
            <div class="flex pb-3 px-3 mx-auto pt-3 text-gray-800 text-sm flex-col md:flex-row max-w-auto justify-center items-center">
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex justify-center">© Copyright 2020. All
                    Rights Reserved.</div>
                <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex justify-center">
                    <button
                        class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-twitter"></i></button><button
                        class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-facebook-square"></i></button><button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-instagram-square"></i></button><button
                        class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
        </div>
    </footer>

</body>

</html> --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @livewireStyles

</head>

<body>

    {{ $slot }}

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

    @livewireScripts

</body>

</html>