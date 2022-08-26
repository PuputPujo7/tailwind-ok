<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" href="img/logo.jpg">
    <meta name="viewport" content="width=device-width">

    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" /> --}}
    <!-- Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

</head>

{{-- <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="https://unpkg.com/flowbite@1.4.2/dist/flowbite.js"></script> --}}

<body>
    <!-- This example requires Tailwind CSS v2.0+ -->

    <!-- component -->
    <script src="//unpkg.com/alpinejs" defer></script>
    <nav class="z-100 relative" x-data="{ open: false, menu: false, lokasi: false }">
        <div class="relative z-100 bg-blue-100 shadow">
            <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="flex items-center px-2 lg:px-0">
                        <a class="flex-shrink-0" href="#">
                            {{-- <img class="block lg:hidden h-12 w-16" src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small.png" alt="Logo">
            <img class="hidden lg:block h-12 w-auto" src="https://imlovefood.com/wp-content/themes/mypanganthema/img/logo_small_gray.png" alt="Logo"> --}}
                            <img class="block lg:hidden h-12 w-16" src="img/logo.jpg" alt="Logo">
                            <img class="hidden lg:block h-12 w-auto" src="img/logo.jpg" alt="Logo">
                        </a>
                        <div class="hidden lg:block lg:ml-2">
                            <div class="flex">
                                <a href="/login"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Location </a>
                                <a href="/coba"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Article </a>
                                <a href="#"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Recipe </a>
                                <a href="#"
                                    class="ml-4 px-3 py-2 rounded-md text-sm leading-5 font-medium text-gray-800 font-semibold hover:bg-yellow-500 hover:text-white transition duration-150 ease-in-out cursor-pointer focus:outline-none focus:text-white focus:bg-gray-700 ">
                                    Promo </a>
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
                        <div>
                            {{-- <button type="button"
                                class="hidden lg:block lg:ml-2 p-1 bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full" src="" alt="">
                            </button> --}}
                            <!-- component -->
                            <div class="hidden lg:block lg:ml-2 group inline-block z0 hover:z-50">
                                <button
                                    class="hidden lg:block lg:ml-2 p-1 bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                    {{-- <span class="pr-1 font-semibold flex-1">Dropdown</span> --}}
                                    <span class="sr-only">Open user menu</span>
                                    <img class="h-8 w-8 rounded-full" src="img/head-avatar.png" alt="">
                                    {{-- <span>
                                        <svg class="fill-current h-4 w-4 transform group-hover:-rotate-180
          transition duration-150 ease-in-out"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path
                                                d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                        </svg>
                                    </span> --}}
                                </button>
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
                                </ul>
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
            <div x-show="menu" class="block md:hidden">
                <div class="px-2 pt-2 pb-3">
                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Location
                    </a>
                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Article
                    </a>
                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Recipe
                    </a>
                    <a href="#"
                        class="mt-1 block px-3 py-2 rounded-md text-black font-semibold font-medium hover:bg-yellow-500 focus:outline-none focus:text-white focus:bg-gray-700 transition duration-150 ease-in-out">Promo
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <div class="bg-white-100 z-0">
        <div class="container mx-auto px-2 pt-5 text-center justify-center z-0">
            <div class="flex flex-wrap text-center lg:text-left ">

                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="object-cover w-full h-96" {{-- src="img/lapi4.jpg" --}}
                                src="https://source.unsplash.com/1600x900/?beach" alt="apple watch photo" />
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover w-full h-96" {{-- src="img/lapi.jpg" --}}
                                src="https://source.unsplash.com/1600x900/?lego" alt="apple watch photo" />
                        </div>
                        <div class="swiper-slide">
                            <img class="object-cover w-full h-96" {{-- src="img/lapi3.jpg" --}}
                                src="https://source.unsplash.com/1600x900/?cat" alt="apple watch photo" />
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <!-- Swiper JS -->
                <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
                <script>
                    var swiper = new Swiper('.mySwiper', {
                        spaceBetween: 30,
                        centeredSlides: true,
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: '.swiper-pagination',
                            clickable: true,
                        },
                        navigation: {
                            nextEl: '.swiper-button-next',
                            prevEl: '.swiper-button-prev',
                        },
                    });
                </script>

            </div>
        </div>
    </div>


    {{-- <div class="bg-white-100 -z-50">
        <div class="container mx-auto px-2 pt-5 text-center justify-center -z-50">
            <div class="flex flex-wrap text-center lg:text-left ">

                <script defer src="https://unpkg.com/alpinejs@3.2.3/dist/cdn.min.js"></script>

                <article x-data="slider" class="relative w-full flex flex-shrink-0 overflow-hidden shadow-2xl">
                    <div
                        class="rounded-full bg-gray-600 text-white absolute top-5 right-5 text-sm px-2 text-center z-10">
                        <span x-text="currentIndex"></span>/
                        <span x-text="images.length"></span>
                    </div>

                    <template x-for="(image, index) in images">
                        <figure class="h-96" x-show="currentIndex == index + 1"
                            x-transition:enter="transition transform duration-300" x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100" x-transition:leave="transition transform duration-300"
                            x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                            <img :src="image" alt="Image"
                                class="absolute inset-0 z-10 h-full w-full object-cover opacity-70" />
                            <figcaption
                                class="absolute inset-x-0 bottom-1 z-20 w-96 mx-auto p-4 font-light text-sm text-center tracking-widest leading-snug bg-gray-300 bg-opacity-25">
                                Any kind of content here!
                                Primum in nostrane potestate est, quid meminerimus? Nulla erit controversia. Vestri haec
                                verecundius, illi fortasse constantius.
                            </figcaption>
                        </figure>
                    </template>

                    <button @click="back()"
                        class="absolute left-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2 flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:-translate-x-0.5"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7">
                            </path>
                        </svg>
                    </button>

                    <button @click="next()"
                        class="absolute right-5 top-1/2 z-10 flex h-11 w-11 -translate-y-1/2  flex justify-center items-center rounded-full shadow-md z-10 bg-gray-100 hover:bg-gray-200">
                        <svg class=" w-8 h-8 font-bold transition duration-500 ease-in-out transform motion-reduce:transform-none text-gray-500 hover:text-gray-600 hover:translate-x-0.5"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7">
                            </path>
                        </svg>
                    </button>


                </article>

                <script>
                    document.addEventListener('alpine:init', () => {
                        Alpine.data('slider', () => ({
                            currentIndex: 1,
                            images: [
                                'https://source.unsplash.com/1600x900/?beach',
                                'https://source.unsplash.com/1600x900/?cat',
                                'https://source.unsplash.com/1600x900/?dog',
                                'https://source.unsplash.com/1600x900/?lego',
                                'https://source.unsplash.com/1600x900/?textures&patterns'

                            ],
                            back() {
                                if (this.currentIndex > 1) {
                                    this.currentIndex = this.currentIndex - 1;
                                }
                            },
                            next() {
                                if (this.currentIndex < this.images.length) {
                                    this.currentIndex = this.currentIndex + 1;
                                } else if (this.currentIndex <= this.images.length) {
                                    this.currentIndex = this.images.length - this.currentIndex + 1
                                }
                            },
                        }))
                    })
                </script>


            </div>
        </div>
    </div> --}}

    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300 pb-5"
            href="#">Articles</a>
        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="lg:flex items-center justify-center w-full">
            <div tabindex="0" aria-label="card 1"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar"
                        class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                Dogecoin nerds</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                            #crypto</div>
                    </div>
                </div>
            </div>
            <div aria-label="card 2" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Sale
                                And Purchase</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div aria-label="bookmark" role="img">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Buy</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Sell
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Rent
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lg:flex items-center justify-center w-full mt-7">
            <div aria-label="card 3" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                Family guy : A thread</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                            #crypto</div>
                    </div>
                </div>
            </div>
            <div aria-label="card 4" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">DC
                                vs Marvel</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                            #crypto</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">
        <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300 pb-5"
            href="#">Videos</a>



        <!-- component -->
        <!-- This is an example component -->

        <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
        <div class="lg:flex items-center justify-center w-full">
            <div tabindex="0" aria-label="card 1"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <img src="https://cdn.tuk.dev/assets/components/misc/doge-coin.png" alt="coin avatar"
                        class="w-12 h-12 rounded-full" />
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                                Dogecoin nerds</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto justify-center text-center items-center'>
                    <div class="flex flex-col m-5 ">
                        {{-- <div class="relative">
                            <video class="w-screen ">
                                <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                    type='video/mp4'>
    
                            </video>
                            <div class="absolute bottom-0 w-full bg-gradient-to-r from-black">
                                <span class="text-white text-xs uppercase px-2">
                                    red
                                </span>
                            </div>
                        </div> --}}
                        <div class="showreels-div">
                            <video class="showreels-video" loop autoplay muted>
                                {{-- <source src='https://github.com/ahampriyanshu/gfg/raw/main/media/showreel.mp4' type="video/mp4" /> --}}
                                <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                    type='video/mp4'>
                                <p>Please Update Your Browser</p>
                            </video>
                            <div class="flex space-x-3 pt-5 mt-20 justify-center items-center text-center">



                                <button
                                    class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>
                                </button>

                            </div>

                        </div>
                        <div>
                            {{-- <div>
                                <div class="relative h-1 bg-gray-200">
                                    <div class="absolute h-full w-1/2 bg-green-500 flex items-center justify-end">
                                        <div class="rounded-full w-3 h-3 bg-white shadow"></div>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- <div class="flex justify-between text-xs font-medium text-gray-500 py-1">
                                <div>
                                    
                                </div>
                                <div class="flex space-x-3 pt-5"> --}}
                            {{-- <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                            <line x1="5" y1="19" x2="5" y2="5"></line>
                                        </svg>
                                    </button> --}}
                            {{-- <button
                                        class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                    </button> --}}
                            {{-- <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                            <line x1="19" y1="5" x2="19" y2="19"></line>
                                        </svg>
                                    </button> --}}
                            {{-- </div>
                                <div>
                                    
                                </div>
                            </div> --}}
                        </div>
                    </div>

                </div>

                <style>
                    .showreels-btn {
                        width: 25%;
                        height: 25%;
                        display: block;
                        margin: 0;
                        position: absolute;
                        top: 50%;
                        left: 55%;
                        -ms-transform: translate(-55%, -50%);
                        transform: translate(-55%, -50%);
                    }

                    .showreels-div:hover .showreels-video {
                        display: block;
                    }

                    .showreels-div:hover .showreels-btn {
                        display: none;
                    }

                    .circle-text {
                        font-size: 24px;
                        font-weight: 700;
                        text-transform: uppercase;
                        letter-spacing: 10px;
                        fill: #333;
                    }

                    .showreels-div {
                        height: 200px;
                        width: 350px;
                        border-radius: 0%;
                    }

                    .showreels-video {
                        border-radius: 0%;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        display: none;
                    }

                    .circle-svg {
                        height: 350px;
                        width: 350px;
                    }

                    .absolute-center {
                        margin: 0;
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                    }
                </style>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#dogecoin
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">
                            #crypto</div>
                    </div>
                </div>
            </div>
            <div aria-label="card 2" tabindex="0"
                class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">Sale
                                And Purchase</p>
                            <p tabindex="0" class="focus:outline-none text-sm leading-normal pt-2 text-gray-500">36
                                members</p>
                        </div>
                        <div aria-label="bookmark" role="img">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10.5001 4.66667H17.5001C18.1189 4.66667 18.7124 4.9125 19.15 5.35009C19.5876 5.78767 19.8334 6.38117 19.8334 7V23.3333L14.0001 19.8333L8.16675 23.3333V7C8.16675 6.38117 8.41258 5.78767 8.85017 5.35009C9.28775 4.9125 9.88124 4.66667 10.5001 4.66667Z"
                                    stroke="#2C3E50" stroke-width="1.25" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div
                    class='flex max-w-sm w-full bg-white shadow-md rounded-lg overflow-hidden mx-auto justify-center text-center items-center'>
                    <div class="flex flex-col m-5 ">
                        {{-- <div class="relative">
                            <video class="w-screen ">
                                <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                    type='video/mp4'>
    
                            </video>
                            <div class="absolute bottom-0 w-full bg-gradient-to-r from-black">
                                <span class="text-white text-xs uppercase px-2">
                                    red
                                </span>
                            </div>
                        </div> --}}
                        <div class="showreels-div">
                            <video class="showreels-video" loop autoplay muted>
                                {{-- <source src='https://github.com/ahampriyanshu/gfg/raw/main/media/showreel.mp4' type="video/mp4" /> --}}
                                <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                    type='video/mp4'>
                                {{-- <source class="w-30 h-30" src='https://www.youtube.com/watch?v=pZqk57Xvujs' type='video/mp4'> --}}
                                <p>Please Update Your Browser</p>

                            </video>
                            <div class="flex space-x-3 pt-5 mt-20 justify-center items-center text-center">



                                <button
                                    class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                    </svg>
                                </button>

                            </div>

                        </div>
                        {{-- <div> --}}
                        {{-- <div>
                                <div class="relative h-1 bg-gray-200">
                                    <div class="absolute h-full w-1/2 bg-green-500 flex items-center justify-end">
                                        <div class="rounded-full w-3 h-3 bg-white shadow"></div>
                                    </div>
                                </div>
                            </div> --}}
                        {{-- <div class="flex justify-between text-xs font-medium text-gray-500 py-1">
                                <div>
                                    
                                </div>
                                <div class="flex space-x-3 pt-5"> --}}
                        {{-- <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="19 20 9 12 19 4 19 20"></polygon>
                                            <line x1="5" y1="19" x2="5" y2="5"></line>
                                        </svg>
                                    </button> --}}
                        {{-- <button
                                        class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                        </svg>
                                    </button> --}}
                        {{-- <button class="focus:outline-none">
                                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                            stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="5 4 15 12 5 20 5 4"></polygon>
                                            <line x1="19" y1="5" x2="19" y2="19"></line>
                                        </svg>
                                    </button> --}}
                        {{-- </div>
                                <div>
                                    
                                </div>
                            </div>
                        </div> --}}
                    </div>

                </div>
                <div class="px-2">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">A group of people
                        interested in dogecoin, the currency and a bit of side for the meme and dof that we all know and
                        love. These cases are perfectly simple and easy to distinguish.</p>
                    <div tabindex="0" class="focus:outline-none flex">
                        <div class="py-2 px-4 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Buy</div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Sell
                        </div>
                        <div class="py-2 px-4 ml-3 text-xs leading-3 text-indigo-700 rounded-full bg-indigo-100">#Rent
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- <a  class="whats-app" href="#" target="_blank">
        <img class="width" src="img/whatsappbtn.png" alt=""> --}}

        {{-- <i class="fa fa-whatsapp my-float"></i> --}}
        <a href="https://api.whatsapp.com/send?phone=6281229094886&text=Assalamu%27alaikum%0D%0AHi+Min%2C+saya+lihat+dari+web+asskiinah+store%0D%0Amau+order+donk%21"
        target="_blank" class="whats-app wawidget"><img src="img/whatsappbtn.png" /></a>
    </a>
    <style>
    .whats-app {
        position: fixed;
        width: 150px;
        height: 150px;
        bottom: 450px;
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
    

    {{-- <!-- chat room -->
    <style>
        .chat-services {
            transition: .5s;
            max-height: 0;
        }

        .chat-services.expand {
            max-height: 350px;
        }

        .message {
            max-width: 250px;
        }

        .chat-modal {
            transition: .5s;
            opacity: 0;
            transform: translateX(500px);
        }

        .chat-modal.show {
            opacity: 1;
            transform: translateX(0);
        }

        @keyframes animateModal {
            from {
                transform: translateX(200px) opacity(0);
            }

            to {
                transform: translateX(0) opacity(1);
            }
        }
    </style>

    <div class="fixed bottom-0 right-0 flex flex-col items-end ml-6 w-full">
        <div class="chat-modal show  mr-5 flex flex-col mb-5 shadow-lg sm:w-1/2 md:w-1/3 lg:w-1/4">
            <!-- close button -->
            <div
                class="close-chat bg-red-500 hover:bg-red-600 text-white mb-1 w-10 flex justify-center items-center px-2 py-1 rounded self-end cursor-pointer">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z" />
                    <path fill-rule="evenodd"
                        d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z" />
                </svg>
            </div>
            <!-- admin profile -->
            <div class="flex justify-between items-center text-white p-2 bg-green-500 border shadow-lg mr-5 w-full">
                <div class="flex items-center">
                    <img src="https://f0.pngfuel.com/png/136/22/profile-icon-illustration-user-profile-computer-icons-girl-customer-avatar-png-clip-art-thumbnail.png"
                        alt="picture" class="rounded-full w-8 h-8 mr-1">
                    <h2 class="font-semibold tracking-wider">Admin</h2>
                </div>
                <div class="flex items-center justify-center">
                    <small class="mr-1">online</small>
                    <div class="rounded-full w-2 h-2 bg-white"></div>
                </div>
            </div>
            <!-- chats -->
            <div class="flex flex-col bg-gray-200 px-2 chat-services expand overflow-auto">
                <div class="chat bg-white text-gray-700 p-2 self-start my-2 rounded-md shadow mr-3">
                    apa ada yang bisa saya bantu ?
                </div> --}}
                {{-- <div class="message bg-green-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, ratione!
                </div>
                <div class="message bg-green-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
                    Lorem, ipsum.
                </div>
                <div class="message bg-white text-gray-700 p-2 self-start my-2 rounded-md shadow mr-3">
                    Lorem ipsum dolor sit amet.
                </div>
                <div class="message bg-green-500 text-white p-2 self-end my-2 rounded-md shadow ml-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, quod.
                </div>
                <div class="message bg-white text-gray-700 p-2 self-start my-2 rounded-md shadow mr-3">
                    Lorem, ipsum dolor.
                </div> --}}

            {{-- </div>
            <!-- send message -->
            <div class="relative bg-white">
                <input type="text" name="message" placeholder="ketik pesan anda"
                    class="pl-4 pr-16 py-2 border border-green-500 focus:outline-none w-full">
                <button
                    class="absolute right-0 bottom-0 text-green-600 bg-white  hover:text-green-500 m-1 px-3 py-1 w-auto transistion-color duration-100 focus:outline-none">Send</button>
            </div>
        </div>
        <div
            class="show-chat hidden mx-10 mb-6 mt-4 text-green-500 hover:text-green-600 flex justify-center items-center cursor-pointer "> --}}
            {{-- <img src="img/whatsappbtn.png" alt=""> --}}
            {{-- <svg width="4em" height="4em" viewBox="0 0 16 16" class="bi bi-chat-text-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM4.5 5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7zm0 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4z"/>
        </svg>
        </div>
    </div>

    <script>
        const chatModal = document.querySelector('.chat-modal');
        const chatServices = document.querySelector('.chat-services');

        const showChat = document.querySelector('.show-chat');
        const closeChat = document.querySelector('.close-chat');

        showChat.addEventListener('click', function() {
            chatModal.classList.add('show')
            showChat.classList.add('hidden')
            setTimeout(() => {
                chatServices.classList.add('expand')
            }, 500);
        });
        closeChat.addEventListener('click', function() {
            setTimeout(() => {
                showChat.classList.remove('hidden')
            }, 820);
            chatServices.classList.remove('expand')
            setTimeout(() => {
                chatModal.classList.remove('show')
            }, 500);
        });
    </script> --}}

    <!-- Start Footer -->

    {{-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> --}}
    <link rel="stylesheet"
        href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


    {{-- <footer class="bg-gradient-to-r from-gray-100 via-[#bce1ff] to-gray-100">
        <div class="container mx-auto px-4 pt-10">
            <div class="flex flex-wrap text-left lg:text-left">
                <div class="w-full lg:w-6/12 px-4">
                    <img src="img/logo.jpg" class="mr-5 h-6 sm:h-9 pt-1" alt="logo" />
                    <h4 class="text-3xl fonat-semibold text-blueGray-700">Let's keep in touch!</h4>
                    <h5 class="text-lg mt-0 mb-2 text-blueGray-600">
                        Find us on any of these platforms, we respond 1-2 business days.
                    </h5> --}}
                    {{-- <div class="mt-6 lg:mb-0 mb-6">
                        <button
                            class="bg-white text-lightBlue-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-twitter"></i></button><button
                            class="bg-white text-lightBlue-600 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-facebook-square"></i></button><button
                            class="bg-white text-pink-400 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-dribbble"></i></button><button
                            class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                            type="button">
                            <i class="fab fa-github"></i>
                        </button>
                    </div> --}}
                {{-- </div>
                <div class="w-full lg:w-6/12 px-4">
                    <div class="flex flex-wrap items-top mb-6">
                        <div class="w-full lg:w-3/12 px-4 ml-auto">
                            <span class="block uppercase text-blueGray-900 text-sm font-semibold mb-2">Useful
                                Links</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-200 hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                        href="#">About Us</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-200 hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                        href="#">Blog</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-200 hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                        href="#">Github</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-200 hover:text-blueGray-500 font-semibold block pb-2 text-sm"
                                        href="#">Free
                                        Products</a>
                                </li>
                            </ul>
                        </div>
                        <div class="w-full lg:w-4/12 px-4">
                            <span class="block uppercase text-blueGray-900 text-sm font-semibold mb-2">Other
                                Resources</span>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="text-blueGray-500 hover:text-blueGray-700 font-semibold block pb-2 text-sm"
                                        href="#">MIT
                                        License</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-500 hover:text-blueGray-700 font-semibold block pb-2 text-sm"
                                        href="#">Terms &amp; Conditions</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-500 hover:text-blueGray-700 font-semibold block pb-2 text-sm"
                                        href="#">Privacy Policy</a>
                                </li>
                                <li>
                                    <a class="text-blueGray-500 hover:text-blueGray-700 font-semibold block pb-2 text-sm"
                                        href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="flex w-full md:w-5/12 px-4">
                            <div class="text-2xl">
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
                                            class="p-2 border border-grey-light rounded text-black placeholder-gray-400 text-sm h-auto
                                focus:bg-white focus:outline-none focus:ring-2 focus:ring-teal-400 focus:border-transparent"
                                            placeholder="Enter Email Address" required="required">
                                        <input type="submit" id="emailBtn" value="Subscribe"
                                            class="bg-teal-500 text-white active:bg-teal-400
                                    rounded shadow hover:shadow-lg outline-none focus:outline-none h-auto text-xs p-3">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-r from-gray-500 via-[#bce1ff] to-gray-500">
            <div class="flex pb-5 px-3 mx-auto pt-5 border-t text-gray-800 text-sm flex-col md:flex-row max-w-auto">
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
                        <i class="fab fa-dribbble"></i></button><button
                        class="bg-white text-blueGray-800 shadow-lg font-normal h-10 w-10 items-center justify-center align-center rounded-full outline-none focus:outline-none mr-2"
                        type="button">
                        <i class="fab fa-github"></i>
                    </button>
                </div>
            </div>
        </div>
    </footer> --}}

    <footer class="bg-gradient-to-r from-gray-200 via-[#bce1ff] to-gray-200">
        {{-- <div class="flex justify-center items-center lg:justify-between p-6 border-b border-gray-300">
            <div class="mr-12 hidden lg:block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div class="flex justify-center">
                <a href="#!" class="mr-6 text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f"
                        class="w-2.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                        <path fill="currentColor"
                            d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z">
                        </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter"
                        class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z">
                        </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google"
                        class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                        <path fill="currentColor"
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z">
                        </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram"
                        class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z">
                        </path>
                    </svg>
                </a>
                <a href="#!" class="mr-6 text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in"
                        class="w-3.5" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="currentColor"
                            d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z">
                        </path>
                    </svg>
                </a>
                <a href="#!" class="text-gray-600">
                    <svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="github"
                        class="w-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512">
                        <path fill="currentColor"
                            d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">
                        </path>
                    </svg>
                </a>
            </div>
        </div> --}}
        <div class="mx-6 py-10 text-center md:text-left">
            <div class="grid grid-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="">

                    <h6
                        class="flex items-center justify-center">
                        <img src="img/logo.jpg" class="mr-5 lg:h-15 sm:h-10 pt-1 justify-center items-center"
                            alt="logo" />

                    </h6>
                    <h6
                        class="uppercase font-semibold mb-4 flex items-center justify-center md:justify-start">

                        Tailwind ELEMENTS
                    </h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit.
                    </p>
                </div>
                <div class="">
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
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
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
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
                    <h6 class="uppercase font-semibold mb-4 flex justify-center md:justify-start">
                        Contact
                    </h6>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="home"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path fill="currentColor"
                                d="M280.37 148.26L96 300.11V464a16 16 0 0 0 16 16l112.06-.29a16 16 0 0 0 15.92-16V368a16 16 0 0 1 16-16h64a16 16 0 0 1 16 16v95.64a16 16 0 0 0 16 16.05L464 480a16 16 0 0 0 16-16V300L295.67 148.26a12.19 12.19 0 0 0-15.3 0zM571.6 251.47L488 182.56V44.05a12 12 0 0 0-12-12h-56a12 12 0 0 0-12 12v72.61L318.47 43a48 48 0 0 0-61 0L4.34 251.47a12 12 0 0 0-1.6 16.9l25.5 31A12 12 0 0 0 45.15 301l235.22-193.74a12.19 12.19 0 0 1 15.3 0L530.9 301a12 12 0 0 0 16.9-1.6l25.5-31a12 12 0 0 0-1.7-16.93z">
                            </path>
                        </svg>
                        New York, NY 10012, US
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="envelope"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                            </path>
                        </svg>
                        info@example.com
                    </p>
                    <p class="flex items-center justify-center md:justify-start mb-4">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone"
                            class="w-4 mr-4" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M493.4 24.6l-104-24c-11.3-2.6-22.9 3.3-27.5 13.9l-48 112c-4.2 9.8-1.4 21.3 6.9 28l60.6 49.6c-36 76.7-98.9 140.5-177.2 177.2l-49.6-60.6c-6.8-8.3-18.2-11.1-28-6.9l-112 48C3.9 366.5-2 378.1.6 389.4l24 104C27.1 504.2 36.7 512 48 512c256.1 0 464-207.5 464-464 0-11.2-7.7-20.9-18.6-23.4z">
                            </path>
                        </svg>
                        + 01 234 567 88
                    </p>
                    <p class="flex items-center justify-center md:justify-start">
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
            {{-- <span>© 2021 Copyright:</span>
          <a class="text-gray-600 font-semibold" href="https://tailwind-elements.com/">Tailwind Elements</a> --}}
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

    {{-- <footer class="text-gray-600 body-font">
        <div
            class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
            <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                    <img src="img/logo.jpg" alt="">
                </a>
                <p class="mt-2 text-sm text-gray-500">Air plant banjo lyft occupy retro adaptogen indego</p>
            </div>
            <div class="flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
                <div class="lg:w-1/4 md:w-1/2 w-full px-4">
                    <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3">CATEGORIES</h2>
                    <nav class="list-none mb-10">
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">First Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Second Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Third Link</a>
                        </li>
                        <li>
                            <a class="text-gray-600 hover:text-gray-800">Fourth Link</a>
                        </li>
                    </nav>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">
            <div class="container mx-auto py-4 px-5 flex flex-wrap flex-col sm:flex-row">
                <p class="text-gray-500 text-sm text-center sm:text-left">© 2020 Footer —
                    <a href="https://twitter.com/knyttneve" rel="noopener noreferrer" class="text-gray-600 ml-1"
                        target="_blank">@MrsRobbot</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
                    <a class="text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            class="w-5 h-5" viewBox="0 0 24 24">
                            <path
                                d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                            </path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                        </svg>
                    </a>
                    <a class="ml-3 text-gray-500">
                        <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                            <path stroke="none"
                                d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
                            </path>
                            <circle cx="4" cy="4" r="2" stroke="none"></circle>
                        </svg>
                    </a>
                </span>
            </div>
        </div>
    </footer> --}}
</body>

</html>
