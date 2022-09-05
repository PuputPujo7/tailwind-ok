<div class="bg-white-100 z-0 sticky top-0 [other classes here]">
    {{-- <div class="container mx-auto px-2 pt-5 text-center justify-center z-0"> --}}
        <div class="flex flex-wrap text-center lg:text-left ">
           
    

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ( $sliders as $slider)
                    <div class="swiper-slide">
                        {{-- <img class="object-cover w-full h-96"  --}}
                        {{-- src="img/lapi4.jpg" --}}
                            {{-- src="https://source.unsplash.com/1600x900/?beach" alt="apple watch photo" /> --}}
                            {{-- src="{{ asset('storage/'.$slider->slider) }}" alt="apple watch photo" /> --}}
                            <div class="bg-blue-300 max-h-96 rounded-xl hover:shadow-xl overflow-hidden relative">
                                <div class="absolute p-4 z-20 h-full w-full justify-between flex flex-col">
                                    <button class="p-2 backdrop-blur-sm bg-gray-800/30 w-12 h-12 justify-center items-center flex self-end rounded-xl border-gray-400/50 border hover:shadow-xl
                                    hover:scale-110 transition duration-300 ease-in-out">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z" />
                                        </svg>
                                    </button>
                                    <div class="text-center p-4 rounded-xl w-full hover:shadow-xl backdrop-blur-sm bg-gray-800/30 self-end border-gray-400/50 border">
                                        <h1 class="text-white font-bold text-3xl mb-10 inline-flex h-20 pt-2 overflow-x-hidden animate-type group-hover:animate-type-reverse whitespace-nowrap text-brand-accent will-change-transform">
                                            {{ $slider->detail }}
                                        </h1>
                                        <div class="flex justify-between">
                                            <h3 class="text-white font-bold text-lg capitalize hover:scale-110 transition duration-300 ease-in-out animate-type]">
                                                From $788
                                            </h3>
                                            <h3 class="text-white font-bold text-lg capitalize hover:scale-110 transition duration-300 ease-in-out ">
                                                63 tours
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <img class="object-cover w-full h-96" 
                        {{-- src="img/lapi4.jpg" --}}
                            {{-- src="https://source.unsplash.com/1600x900/?beach" alt="apple watch photo" /> --}}
                            src="{{ asset('storage/'.$slider->slider) }}" alt="apple watch photo" />
                                {{-- <image class="w-full" src="https://images.unsplash.com/photo-1489516408517-0c0a15662682?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80" /> --}}
                            </div>
                    </div>
                    @endforeach
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
    {{-- </div> --}}
</div>
