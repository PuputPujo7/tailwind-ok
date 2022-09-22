<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto w-full">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item" src="{{url('https://www.youtube.com/watch?v=py6GDNgye6k')}}" frameborder="0" allowfullscreen></iframe>
          </div>
        <header class="mb-16 group">
          @foreach ($users as $user)
            <h1 class="mb-1 font-mono text-4xl text-gray-100 md:text-6xl">
                hi, I'm {{ $user->name }}<br className="block md:hidden" />
                
                    <span
                        class="inline-flex h-20 pt-2 overflow-x-hidden animate-type group-hover:animate-type-reverse whitespace-nowrap text-brand-accent will-change-transform">
                        ٱلسَّلَامُ عَلَيْكُمْ {{ $user->name }} 👋
                @endforeach
                </span>
                <span
                    class="box-border inline-block w-1 h-10 ml-2 -mb-2 bg-white md:-mb-4 md:h-16 animate-cursor will-change-transform"></span>
                <marquee>ٱلسَّلَامُ عَلَيْكُمْ {{ $user->name }} 👋 This text will scroll from right to left</marquee>
                <div class="overflow-hidden rounded-lg shadow-lg mt-3 w-full">
                    <div class="w-full">
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center">Tanggal
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">
                                        Keterangan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                        Pemasukkan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                        Pengeluaran
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/6 sm:center text-center">Saldo
                                        Akhir
                                    </th>
                                </tr>
                            </thead>
                        </table>
                        <marquee direction="up">
                            <table class="w-full">
                                <tbody class="bg-white">
                                    <tr class="text-black">

                                        @foreach ($reports as $report => $row)
                                    <tr>
                                        <th scope="row" class="border-b border-l border-r text-black">
                                            {{ $loop->index + 1 }}</th>
                                        <td class="px-4 py-3 text-ms border text-black">{{ $row->date }}</td>
                                        <td class="px-4 py-3 text-xs border text-black">
                                            <span class="px-2 py-1 font-semibold text-sm text-black">
                                                {{ $row->transaction }} </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm border text-black">@currency($row->entry)</td>
                                        <td class="px-4 py-3 text-sm border text-black">@currency($row->out)

                                        </td>
                                        <td class="px-4 py-3 text-sm border w-auto text-black">
                                            Rp. {{ number_format((int) $row->saldo) }}
                                        </td>
                                    </tr>
                                    @endforeach
                                    <tr class="text-black">
                                        <td class="px-4 py-3 text-ms font-semibold text-black"></td>
                                        <td class="px-4 py-3 text-ms font-semibold text-black"></td>
                                        <th class="px-4 py-3 text-l font-bold text-black">Total Saldo</th>
                                        <td class="px-4 py-3 text-ms border font-bold text-black">Rp.
                                            {{ number_format($reports->sum('entry')) }}</td>
                                        <td class="px-4 py-3 text-ms border font-bold text-black">Rp.
                                            {{ number_format($reports->sum('out')) }}</td>
                                        <td class="px-4 py-3 text-ms border font-bold text-black">Rp.
                                            {{ number_format($reports->sum('entry') - $reports->sum('out')) }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </marquee>
                    </div>
                </div>

                <marquee direction="down" width="full" height="700" behavior="alternate" style="border:solid">
                    <marquee behavior="alternate">
                        {{-- This text will bounce --}}
                        <table class="w-full">
                            <thead>
                                <tr
                                    class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">No
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center">Tanggal
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">
                                        Keterangan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                        Pemasukkan
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                        Pengeluaran
                                    </th>
                                    <th scope="col"
                                        class="px-4 py-3 border-b border-l border-r w-1/6 sm:center text-center">Saldo
                                        Akhir
                                    </th>

                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                <tr class="text-gray-700">

                                    @foreach ($reports as $report => $row)
                                <tr>
                                    <th scope="row" class="border-b border-l border-r">
                                        {{ $loop->index + 1 }}</th>
                                    <td class="px-4 py-3 text-ms border">{{ $row->date }}</td>
                                    <td class="px-4 py-3 text-xs border">
                                        <span class="px-2 py-1 font-semibold text-sm text-black-700">
                                            {{ $row->transaction }} </span>
                                    </td>
                                    <td class="px-4 py-3 text-sm border">@currency($row->entry)</td>
                                    <td class="px-4 py-3 text-sm border">@currency($row->out)

                                    </td>

                                    <td class="px-4 py-3 text-sm border w-auto">
                                        Rp. {{ number_format((int) $row->saldo) }}
                                    </td>
                                </tr>
                                @endforeach
                                <tr class="text-gray-700">
                                    <td class="px-4 py-3 text-ms font-semibold"></td>
                                    <td class="px-4 py-3 text-ms font-semibold"></td>
                                    <th class="px-4 py-3 text-l font-bold">Total Saldo</th>
                                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                                        {{ number_format($reports->sum('entry')) }}</td>
                                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                                        {{ number_format($reports->sum('out')) }}</td>
                                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                                        {{ number_format($reports->sum('entry') - $reports->sum('out')) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </marquee>
                </marquee>
            </h1>
            <div class="text-xl font-semibold md:text-3xl">developer by choice and designer for fun</div>
        </header>

        <!--
  Welcome to Tailwind Play, the official Tailwind CSS playground!

  Everything here works just like it does when you're running Tailwind locally
  with a real build pipeline. You can customize your config file, use features
  like `@apply`, or even add third-party plugins.

  Feel free to play with this example if you're just learning, or trash it and
  start from scratch if you know enough to be dangerous. Have fun!
-->
        <div class="min-h-screen py-6 flex flex-col justify-center sm:py-12">

            <div class="bg-white flex flex-col space-x-12 space-y-6 p-20 justify-center items-center">
                <h3 class="text-3xl font-bold text-yellow-500 animate-bounce animate-[wave_5s_ease-in-out_2]">Tailwind
                    CSS Animation</h3>
                <h3 class="text-3xl font-bold text-indigo-500 animate-ping animate-[wave_5s_ease-in-out_2]">Tailwind CSS
                    Animation</h3>
                <h1 class="text-center flex font-semibold text-emerald-500">
                    Hello <span class="animate-[wave_5s_ease-in-out_2]"> 👋🏻</span>, arbitrary values
                </h1>

            </div>

            <div class="bg-white flex space-x-12 p-5 justify-center items-center">
                <div class="h-20 w-20 bg-blue-900 p-2 animate-spin-slow rounded-md"></div>
                <div class="h-20 w-20 bg-purple-500 p-2 animate-ping-slow rounded-md"></div>
            </div>
            <div class="bg-white flex space-x-12 p-12 justify-center items-center">
                <div class="h-20 w-20 bg-blue-500 p-2 lg:animate-spin md:animate-spin animate-none rounded-md"></div>
                <div
                    class="h-20 w-20 bg-purple-500 p-2 animate-ping lg:animate-ping md:animate-ping animate-none rounded-md">
                </div>
                <div
                    class="h-20 w-20 bg-green-500 p-2 animate-bounce lg:animate-bounce md:animate-bounce animate-none rounded-md">
                </div>
                <div
                    class="h-20 w-20 bg-gray-500 p-2 animate-pulse lg:animate-pulse md:animate-pulse animate-none rounded-md">
                </div>
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
            </div>

            <div class="container flex justify-center mx-auto mt-20 bg-white p-12">
                <span xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 animate-spin text-gray-600" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <svg class="w-20 h-20 fill-stroke text-yellow-400" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z">
                        </path>
                    </svg>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                </span>
            </div>
        </div>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($sliders as $slider)
                    <div class="swiper-slide">
                        <div class="bg-blue-300 max-h-96 rounded-xl hover:shadow-xl overflow-hidden relative">
                            <table class="w-full">
                                <thead>
                                    <tr
                                        class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">
                                            No
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center">
                                            Tanggal
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">
                                            Keterangan
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                            Pemasukkan
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">
                                            Pengeluaran
                                        </th>
                                        <th scope="col"
                                            class="px-4 py-3 border-b border-l border-r w-1/6 sm:center text-center">
                                            Saldo Akhir
                                        </th>

                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    <tr class="text-gray-700">

                                        @foreach ($reports as $report => $row)
                                    <tr>
                                        <th scope="row" class="border-b border-l border-r">
                                            {{ $loop->index + 1 }}</th>
                                        <td class="px-4 py-3 text-ms border">{{ $row->date }}</td>
                                        <td class="px-4 py-3 text-xs border">
                                            <span class="px-2 py-1 font-semibold text-sm text-black-700">
                                                {{ $row->transaction }} </span>
                                        </td>
                                        <td class="px-4 py-3 text-sm border">@currency($row->entry)</td>
                                        <td class="px-4 py-3 text-sm border">@currency($row->out)

                                        </td>
                                        <td class="px-4 py-3 text-sm border w-auto">
                                            Rp. {{ number_format((int) $row->saldo) }}
                                        </td>
                                    </tr>
                @endforeach
                <tr class="text-gray-700">
                    <td class="px-4 py-3 text-ms font-semibold"></td>
                    <td class="px-4 py-3 text-ms font-semibold"></td>
                    <th class="px-4 py-3 text-l font-bold">Total Saldo</th>
                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                        {{ number_format($reports->sum('entry')) }}</td>
                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                        {{ number_format($reports->sum('out')) }}</td>
                    <td class="px-4 py-3 text-ms border font-bold">Rp.
                        {{ number_format($reports->sum('entry') - $reports->sum('out')) }}</td>
                </tr>
                </tbody>
                </table>
                <img class="object-cover w-full h-96" src="{{ asset('storage/' . $slider->slider) }}"
                    alt="apple watch photo" />
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

    </div>
</section>
