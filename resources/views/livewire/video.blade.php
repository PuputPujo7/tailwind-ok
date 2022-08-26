<section>
<div aria-label="group of cards" tabindex="0" class="focus:outline-none p-8 w-full bg-blue-100 px-2 mt-2 rounded">
    <a class="block text-2xl font-bold text-center text-gray-800 dark:text-white lg:text-3xl hover:text-gray-700 dark:hover:text-gray-300 pb-5"
        href="#">Videos</a>



    <!-- component -->
    <!-- This is an example component -->

    <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    <div class="lg:flex items-center justify-center w-full">
        {{-- <div tabindex="0" aria-label="card 1"
            class="focus:outline-none lg:w-4/12 m-3 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
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
                    <div class="showreels-div">
                        <video class="showreels-video" loop autoplay muted> --}}
                            {{-- <source src='https://github.com/ahampriyanshu/gfg/raw/main/media/showreel.mp4' type="video/mp4" /> --}}
                            {{-- <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
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
        </div> --}}
        @foreach ($videos as $video)
        <div aria-label="card 2" tabindex="0"
            class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
            
            <div class="flex items-center border-b border-gray-200 pb-6">
                <div class="w-12 h-12 bg-gray-300 rounded-full flex flex-shrink-0"></div>
                <div class="flex items-start justify-between w-full">
                    <div class="pl-3 w-full">
                        <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">
                            {{ $video->title }}</p>
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
                    <div class="showreels-div">
                        {{-- <video class="showreels-video" loop autoplay muted> --}}
                            {{-- <source src='https://github.com/ahampriyanshu/gfg/raw/main/media/showreel.mp4' type="video/mp4" /> --}}
                            {{-- <source class="w-30 h-30" src='https://www.w3schools.com/html/mov_bbb.mp4'
                                type='video/mp4'> --}}
                            {{-- <source class="w-30 h-30" src='https://www.youtube.com/watch?v=pZqk57Xvujs' type='video/mp4'> --}}
                            {{-- <p>Please Update Your Browser</p> --}}

                        {{-- </video> --}}
                        {{-- <iframe class="flex items-center" src="https://www.youtube.com/embed/6YqqCgK3lxQ" frameborder="3" width="350" height="200" allowfullscreen></iframe> --}}
                        <iframe class="flex items-center" src="{{ substr($video->url, 0 ,25) }}embed/{{ substr($video->url, 25 ,40) }}" frameborder="3" width="350" height="200" allowfullscreen></iframe>
                        {{-- <div class="flex space-x-3 pt-5 mt-20 justify-center items-center text-center">
                            <button
                                class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                            </button>
                        </div> --}}
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
        @endforeach
        {{-- <div aria-label="card 2" tabindex="0"
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
                    <div class="showreels-div"> --}}
                        {{-- <video class="showreels-video" loop autoplay muted> --}}
                            {{-- <iframe src="https://www.youtube.com/embed/HqAMb6kqlLs" frameborder="1"></iframe> --}}
                            {{-- <iframe class="flex items-center" src="https://www.youtube.com/embed/U54o2iUK0Uc" frameborder="3" width="350" height="200" allowfullscreen></iframe> --}}
                        {{-- </video> --}}
                        {{-- <div class="flex space-x-3 pt-5 mt-20 justify-center items-center text-center">
                            <button
                                class="rounded-full w-8 h-8 flex items-center justify-center pl-0.5 ring-2 ring-green-500 focus:outline-none">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="#10b981"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                            </button>
                        </div>
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
        </div> --}}
        
    </div>
    {{-- <iframe src="https://www.youtube.com/embed/6YqqCgK3lxQ" frameborder="1"></iframe>
    <iframe src="https://www.youtube.com/embed/dXBohfjc4WA" width="680" height="480" allowfullscreen></iframe> --}}

</div>
</section>