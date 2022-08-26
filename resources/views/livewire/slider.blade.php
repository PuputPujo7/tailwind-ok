<div class="bg-white-100 z-0 sticky top-0 [other classes here]">
    {{-- <div class="container mx-auto px-2 pt-5 text-center justify-center z-0"> --}}
        <div class="flex flex-wrap text-center lg:text-left ">
           
    

            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach ( $sliders as $slider)
                    <div class="swiper-slide">
                        <img class="object-cover w-full h-96" {{-- src="img/lapi4.jpg" --}}
                            {{-- src="https://source.unsplash.com/1600x900/?beach" alt="apple watch photo" /> --}}
                            src="{{ asset('storage/'.$slider->slider) }}" alt="apple watch photo" />
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
