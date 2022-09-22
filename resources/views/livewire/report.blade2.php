<div class="bg-white-100 z-0 sticky top-0 [other classes here]">
    <div class="container mx-auto px-2 pt-5 text-center justify-center z-0">
        <div class="flex flex-wrap text-center lg:text-left ">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    {{-- <!-- @foreach ( $sliders as $slider) --> --}}
                    <div class="swiper-slide">
					<div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>

                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center text-gray-100">
                                    No
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center text-gray-100">
                                    Tamu
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center text-gray-100">
                                    Keperluan
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center text-gray-100">
                                    Kelompok
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white overflow-x-auto overflow-y-auto ">
                            <tr class="text-gray-700">

                                @foreach ($guests as $guest)
                            <tr>
                                <th scope="row" class="border-b border-l border-r h-2 w-2">
                                    {{ $loop->index + 1 }}</th>
                                <td class="px-4 py-3 text-ms border h-4 w-4 text-gray-900">
                                    <h1 class="font-semibold">{{ $guest->name }}</h3>
                                        <div>
                                            <div class="flex items-center space-x-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                </svg>
                                                <p class="text-lg items-center text-blue-500 underline">
                                                    {{ $guest->email }}
                                                </p>
                                            </div>
                                            <div class="flex mt-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4"
                                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M16 8l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2M5 3a2 2 0 00-2 2v1c0 8.284 6.716 15 15 15h1a2 2 0 002-2v-3.28a1 1 0 00-.684-.948l-4.493-1.498a1 1 0 00-1.21.502l-1.13 2.257a11.042 11.042 0 01-5.516-5.517l2.257-1.128a1 1 0 00.502-1.21L9.228 3.683A1 1 0 008.279 3H5z" />
                                                </svg>
                                                <p class="text-lg items-center">{{ $guest->phone }}</p>
                                            </div>
                                        </div>
                                </td>
                                <td class="px-4 py-3 text-ms border">{{ $guest->agenda }}</td>
                                <td class="px-4 py-3 text-ms border h-4 w-4">{{ $guest->group }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div> 
                    </div>
                    {{-- <!-- @endforeach --> --}}
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
