<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto w-full">
    <header class="mb-16 group">
    <h1 class="mb-1 font-mono text-4xl text-gray-100 md:text-6xl">
      hi, I'm <br className="block md:hidden" />
      <span
        class="inline-flex h-20 pt-2 overflow-x-hidden animate-type group-hover:animate-type-reverse whitespace-nowrap text-brand-accent will-change-transform"
      >
        vanntile 👋
      </span>
      <span
        class="box-border inline-block w-1 h-10 ml-2 -mb-2 bg-white md:-mb-4 md:h-16 animate-cursor will-change-transform"
      ></span>
      <marquee>This text will scroll from right to left</marquee>

<marquee direction="up">This text will scroll from bottom to top</marquee>

<marquee direction="down" width="250" height="200" behavior="alternate" style="border:solid">
  <marquee behavior="alternate">
    This text will bounce
  </marquee>
</marquee>
    </h1>
    <div class="text-xl font-semibold md:text-3xl">developer by choice and designer for fun</div>
    </header>

  {{-- <!-- component -->
<div>
    <nav class="flex flex-col bg-purple-900 w-64 h-screen px-4 tex-gray-900 border border-purple-900">
      <div class="flex flex-wrap mt-8">
        <div class="w-1/2">
          <img
            src="https://randomuser.me/api/portraits/women/27.jpg"
            class="mx-auto w-20 h-20 rounded-full"
          />
        </div>
        <div class="w-1/2">
          <span class="font-semibold text-white">Ava Harper</span>
          <button class="bg-green-500 text-white px-4 py-2 rounded-md border border-blue-500 hover:bg-white hover:text-green-500">
            Premium
          </button>
        </div>
      </div>
      <div class="mt-10 mb-4">
        <ul class="ml-4">
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path
                  d="M16 20h4v-4h-4m0-2h4v-4h-4m-6-2h4V4h-4m6
                      4h4V4h-4m-6 10h4v-4h-4m-6 4h4v-4H4m0 10h4v-4H4m6
                      4h4v-4h-4M4 8h4V4H4v4z"
                ></path>
              </svg>
            </span>
            <a href="#">
              <span class="ml-2">Dashboard</span>
            </a>
          </li>
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg
                class="fill-current h-5 w-5 "
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7ZM14 7C14 8.10457 13.1046 9 12 9C10.8954 9 10 8.10457 10 7C10 5.89543 10.8954 5 12 5C13.1046 5 14 5.89543 14 7Z"
                  fill="currentColor"
                />
                <path
                  d="M16 15C16 14.4477 15.5523 14 15 14H9C8.44772 14 8 14.4477 8 15V21H6V15C6 13.3431 7.34315 12 9 12H15C16.6569 12 18 13.3431 18 15V21H16V15Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <a href="#">
             
              <span class="ml-2">Customers</span>
            </a>
          </li>
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path
                  d="M19 19H5V8h14m-3-7v2H8V1H6v2H5c-1.11 0-2 .89-2
                      2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0
                      00-2-2h-1V1m-1 11h-5v5h5v-5z"
                ></path>
              </svg>
            </span>
            <a href="#">
             
              <span class="ml-2">Milestones</span>
            </a>
          </li>
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5" viewBox="0 0 24 24">
                <path
                  d="M12 4a4 4 0 014 4 4 4 0 01-4 4 4 4 0 01-4-4 4 4 0
                      014-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4
                      8-4z"
                ></path>
              </svg>
            </span>
            <a href="#">
              <span class="ml-2">Team</span>
            </a>
          </li>
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg class="fill-current h-5 w-5 " viewBox="0 0 24 24">
                <path
                  d="M12 13H7v5h5v2H5V10h2v1h5v2M8
                      4v2H4V4h4m2-2H2v6h8V2m10 9v2h-4v-2h4m2-2h-8v6h8V9m-2
                      9v2h-4v-2h4m2-2h-8v6h8v-6z"
                ></path>
              </svg>
            </span>
            <a href="#">
              <span class="ml-2">Tasks</span>
            </a>
          </li>
          <li class="mb-2 px-4 py-4 text-gray-100 flex flex-row  border-gray-300 hover:text-black   hover:bg-gray-300  hover:font-bold rounded rounded-lg">
            <span>
              <svg
                class="fill-current h-5 w-5 "
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M7 3C8.86384 3 10.4299 4.27477 10.874 6H19V8H10.874C10.4299 9.72523 8.86384 11 7 11C4.79086 11 3 9.20914 3 7C3 4.79086 4.79086 3 7 3ZM7 9C8.10457 9 9 8.10457 9 7C9 5.89543 8.10457 5 7 5C5.89543 5 5 5.89543 5 7C5 8.10457 5.89543 9 7 9Z"
                  fill="currentColor"
                />
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M17 20C15.1362 20 13.5701 18.7252 13.126 17H5V15H13.126C13.5701 13.2748 15.1362 12 17 12C19.2091 12 21 13.7909 21 16C21 18.2091 19.2091 20 17 20ZM17 18C18.1046 18 19 17.1046 19 16C19 14.8954 18.1046 14 17 14C15.8954 14 15 14.8954 15 16C15 17.1046 15.8954 18 17 18Z"
                  fill="currentColor"
                />
              </svg>
            </span>
            <a href="#">
              <span class="ml-2">Settings</span>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </div> --}}

<!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
<div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">
    {{-- <div class="bg-white flex space-x-12 p-12 justify-center items-center">
      <div class="h-20 w-20 bg-blue-500 p-2 animate-spin rounded-md"></div>
      <div class="h-20 w-20 bg-purple-500 p-2 animate-ping-slow rounded-md"></div>
      <div class="h-20 w-20 bg-green-500 p-2 animate-bounce rounded-md"></div>
      <div class="h-20 w-20 bg-gray-500 p-2 animate-pulse rounded-md"></div>
    </div>
    <div class="bg-white flex space-x-12 p-5 justify-center items-center">
      <div class="h-20 w-20 bg-blue-900 p-2 hover:animate-spin rounded-md"></div>
      <div class="h-20 w-20 bg-purple-500 p-2 hover:animate-ping rounded-md"></div>
      <div class="h-20 w-20 bg-green-500 p-2 hover:animate-bounce rounded-md"></div>
      <div class="h-20 w-20 bg-gray-500 p-2 hover:animate-pulse rounded-md"></div>
    </div> --}}
    <div class="bg-white flex flex-col space-x-12 space-y-6 p-20 justify-center items-center">
      <h3 class="text-3xl font-bold text-yellow-500 animate-bounce animate-[wave_5s_ease-in-out_2]">Tailwind CSS Animation</h3>
      <h3 class="text-3xl font-bold text-indigo-500 animate-ping animate-[wave_5s_ease-in-out_2]">Tailwind CSS Animation</h3>
      <h1 class="text-center flex font-semibold text-emerald-500">
        Hello <span class="animate-[wave_5s_ease-in-out_2]"> Tailwind CSS Animation👋🏻</span>, arbitrary values
      </h1>

    </div>

    {{-- <h1 class="text-center flex font-semibold text-emerald-500">
        Hello <span class="animate-[wave_5s_ease-in-out_2]"> Tailwind CSS Animation👋🏻</span>, arbitrary values
      </h1>
      <p class="text-center text-xs text-gray-400">
        Wave animation, 5 seconds duration, ease-in-out, 2 iterations
      </p>
      <pre className="text-center text-xs text-gray-500 animate-[wave_5s_ease-in-out_2]">
        
      </pre> --}}

    {{-- <div class="bg-white flex space-x-12 p-5 justify-center items-center">
      <div class="h-20 w-20 bg-blue-900 p-2 animate-spin-slow rounded-md"></div>
      <div class="h-20 w-20 bg-purple-500 p-2 animate-ping-slow rounded-md"></div>
    </div>
    <div class="bg-white flex space-x-12 p-12 justify-center items-center">
      <div class="h-20 w-20 bg-blue-500 p-2 lg:animate-spin md:animate-spin animate-none rounded-md"></div>
      <div class="h-20 w-20 bg-purple-500 p-2 animate-ping lg:animate-ping md:animate-ping animate-none rounded-md"></div>
      <div class="h-20 w-20 bg-green-500 p-2 animate-bounce lg:animate-bounce md:animate-bounce animate-none rounded-md"></div>
      <div class="h-20 w-20 bg-gray-500 p-2 animate-pulse lg:animate-pulse md:animate-pulse animate-none rounded-md"></div>
    </div>
    <div class="bg-white flex space-x-12 p-12 justify-center items-center">
      <div class="flex items-center justify-center space-x-2 animate-pulse">
        <div class="w-8 h-8 bg-indigo-500 rounded-full"></div>
        <div class="w-8 h-8 bg-indigo-500 rounded-full"></div>
        <div class="w-8 h-8 bg-indigo-500 rounded-full"></div>
      </div>
    </div>
    <div class="bg-white flex space-x-12 p-12 justify-center items-center">
      <div class="border border-blue-300 shadow rounded-md p-4 max-w-sm w-full mx-auto">
        <div class="animate-pulse flex space-x-4">
          <div class="rounded-full bg-blue-400 h-12 w-12"></div>
          <div class="flex-1 space-y-4 py-1">
            <div class="h-4 bg-blue-400 rounded w-3/4"></div>
            <div class="space-y-2">
              <div class="h-4 bg-blue-400 rounded"></div>
              <div class="h-4 bg-blue-400 rounded w-5/6"></div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
    {{-- <div class="container flex justify-center mx-auto mt-20 bg-white p-12">
      <div class="relative">
        <img class="object-cover w-16 h-16 rounded-full" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" alt="Avatar" />
        <span class="absolute right-0 w-4 h-4 bg-green-600 border-2 border-white rounded-full top-2 animate-pulse"></span>
      </div>
    </div> --}}
    <div class="container flex justify-center mx-auto mt-20 bg-white p-12">
      <span xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 animate-spin text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <svg class="w-20 h-20 fill-stroke text-yellow-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                                        </path>
                                    </svg>Coba
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
      </span>
    </div>
  </div>
</div>
</section>