<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto rounded shadow w-full grid gap-3 gap-top-3 sm:grid-cols-1 lg:grid-cols-2">
        <!-- flag-language -->
        <div class="dropdown-menu absolute max-w-sm rounded top-24 right-0 mt-16">
            <div class="flag-app z-50 px-3 sticky max-w-sm rounded top-16 right-0 mt-16">
                <ul>
                    <li class="flex h-8 w-auto z-100">
                        <a href="">
                            <img src="ina.png" alt="" class="h-6 w-auto">
                            {{-- <i class="fa fa-angle-down"></i> --}}
                        </a>
                        <ul class="">
                            <a href="/guest-eng">
                                <img src="english.jpg" alt="" class="">
                            </a>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <style>
            .flag-app {
                position: fixed;
                /* width: 50px;
                    height: 50px;
                    bottom: 300px; */
                top: 5px;
                /* background-color: #25d366; */
                /* color: #FFF; */
                /* border-radius: 50px; */
                text-align: center;
                font-size: 30px;
                /* box-shadow: 3px 4px 3px #999; */
                /* left: 15px; */
                right: 15px;
                z-index: 500;
            }

            .my-float {
                margin-top: 10px;
            }
        </style>

        <div class="px-4 py-6 gap-x-6 max-w-4xl mx-auto bg-blue-100 rounded shadow w-full">
            <div class="mb-3 mt-3">
                <form wire:submit.prevent="submit" class="">
                    <div class="mt-3">
                        <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 underline">Buku Tamu</h2>
                        <div class="mt-4">
                            <p class="mb-1 text-gray-700 font-semibold text-sm">Kelompok (Perorangan/ Perusahaan -
                                Instansi)
                            </p>
                            <div wire:model="group"
                                class="flex space-x-4 my-2 items-center grid gap-6 mb-3 sm:grid-cols-2 lg:grid-cols-2"placeholder="Personal/ Company - Institution"
                                required>
                                <select name="" id=""
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Personal/ Company/ Institution" required>
                                    {{-- <option value="-">Select please.. </option> --}}
                                    <option value="Personal">Perorangan</option>
                                    <option value="Company/ Institution">Perusahaan - Instansi</option>

                                </select>
                                {{-- <div wire:model="group" class="flex items-center space-x-1" required>
                                                <input type="radio" id="personal" class="cursor-pointer" required>
                                                <label for="personal" class="cursor-pointer">Personal</span>
                                        
                                                <input type="radio" id="professional" class="cursor-pointer" required>
                                                <label for="professional" class="cursor-pointer">Company/ Institution</span>
                                            </div> --}}
                            </div>
                        </div>
                        <div class="grid gap-3 mb-3 sm:grid-cols-2 lg:grid-cols-2">
                            <div>
                                <label for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama/
                                    Perusahaan - Instansi</label>
                                <input type="text" wire:model="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Nama/ Perusahaan..." required>
                            </div>
                            <div>
                                <label for="idcard"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIK/
                                    NPWP</label>
                                <input type="tel" wire:model="nik" id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123456789" required>
                            </div>
                            <div>
                                <label for="email"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                                <input type="email" wire:model="email" id="email"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="contoh@email.com" required>
                            </div>
                            <div>
                                <label for="phone"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. Telp./
                                    HP
                                </label>
                                <input type="tel" wire:model="phone" id="phone"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="081234567890" required>
                                {{-- pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required> --}}
                            </div>
                            <div class="mb-3">
                                <label for="meet"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bertemu
                                    Dengan</label>
                                <input type="text" wire:model="meet"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Kepada ...." required>
                            </div>
                            <div class="mb-3">
                                <label for="spt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. SPT
                                    (Jika
                                    Ada)</label>
                                <input type="tel" wire:model="spt"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123456789...">
                            </div>

                        </div>
                        <div class="mb-3">
                            <label for="address"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                            <textarea name="" wire:model="address" id="" cols="30" rows="10"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Jl. ...." required></textarea>
                            {{-- <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jl. ...." required> --}}
                        </div>
                        {{-- <div class="mb-3">
                                <label for="meet"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Bertemu
                                    Dengan</label>
                                <input type="text" wire:model="meet"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Kepada ...." required>
                            </div> --}}
                        <div class="mb-3">
                            <label for="agenda"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Keperluan</label>
                            <textarea wire:model="agenda"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Untuk ...." required></textarea>
                        </div>
                        {{-- <div class="mb-3">
                                <label for="spt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">No. SPT (Jika
                                    Ada)</label>
                                <input type="tel" wire:model="spt"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123456789...">
                            </div> --}}

                            <main x-data="app" class="">
                                <!-- toast -->
                            <button type="button" @click="closeToast()" x-show="open" x-transition.duration.300ms class="fixed top-4 right-4 z-50 rounded-md bg-green-500 px-4 py-2 text-white transition hover:bg-green-600">
                                <div class="flex items-center space-x-2">
                                  <span class="text-3xl"><i class="bx bx-check"></i></span>
                                  <p class="font-bold">Data Sudah Disimpan</p>
                                </div>
                              </button>
                            
                              <!-- trigger button -->
                              <button type="submit" @click="openToast()" class="rounded-md bg-blue-500 px-4 py-2 font-bold text-white transition hover:bg-blue-600">Simpan</button>
                            {{-- </main> --}}
                            
                            <script>
                              let timer;
                            
                              document.addEventListener("alpine:init", () => {
                                  Alpine.data("app", () => ({
                                      open: false,
                            
                                      openToast() {
                                          if (this.open) return;
                                          this.open = true;
                            
                                          // reset time to 0 second
                                          clearTimeout(timer);
                            
                                          // auto close toast after 5 seconds
                                          timer = setTimeout(() => {
                                              this.open = false;
                                          }, 5000);
                                      },
                            
                                      closeToast() {
                                          this.open = false;
                                      },
                                  }));
                              });
                            </script>    

                        {{-- <button type="submit"
                            class="w-auto p-4 mt-4 text-center justify-center bg-blue-500 text-black py-2 rounded-md text-lg font-semibold">Simpan</button> --}}
                    </div>
                </form>

                {{-- @if (session('success')) --}}
                    {{-- <div id="myToast" class="hidden fixed right-10 bottom-10 px-5 py-4 border-r-8 border-blue-500 bg-white drop-shadow-lg"> --}}
                    {{-- <div id="toast"
                        class="fixed right-10 bottom-10 px-5 py-4 border-r-8 border-green-700 bg-green-300 drop-shadow-lg">
                        {{ session('success') }}
                    </div> --}}

                    <!-- Javascript code -->
                    {{-- <script>
                        function toast() {
                            // Show the toast
                            document.getElementById("toast").classList.remove("hidden");
                            // Hide the toast after 5 seconds (5000ms)
                            // you can set a shorter/longer time by replacing "5000" with another number
                            setTimeout(function() {
                                document.getElementById("toast").classList.add("hidden");
                            }, 5000);
                        }
                    </script> --}}
                    {{-- <div class="mt-2 alert alert-success btn-success text-center justify-center bg-green-500 text-black py-2 px-2 rounded-md text-lg font-semibold">
                            {{ session('success') }}
                        </div> --}}
                {{-- @endif --}}
            </div>
        </div>


        <!-- component -->
        <div class="px-4 py-6 gap-x-6 max-w-4xl mx-auto bg-blue-100 rounded shadow w-full">
            <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 mb-4 underline">List Tamu</h2>
            <div class="grid gap-6 mb-6 sm:grid-cols-2 lg:grid-cols-2 row">
                <div class="col-md-3">
                    {{-- <select class="form-control" wire:model="paging">
                            <option value="1">1</option>
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="20">20</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                            <option value="500">500</option>
                            <option value="1000">1000</option>
                        </select> --}}
                </div>

                {{-- <div class="col-md-4">
                        <input wire:model="search" type="text" class="form-control w-full" placeholder="Cari Data..">
                    </div> --}}
            </div>
            <div class="bg-white rounded-lg shadow relative px-3 mt-5 mr-2">
                <div class="w-full overflow-x-auto">
                    <table class="w-full mt-3">
                        <thead>

                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th scope="col" class="px-2 py-3 border-b w-10 sm:center text-center">No
                                </th>
                                <th scope="col" class="px-4 py-3 border-b w-36 sm:center text-center">
                                    Tamu
                                </th>
                                <th scope="col" class="px-4 py-3 border-b w-48 sm:center text-center">
                                    Keperluan
                                </th>
                                <th scope="col" class="px-4 py-3 border-b w-32 sm:center text-right">
                                    Kelompok
                                </th>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
            <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative w-full px-3"
                style="height: 500px;">
                {{-- <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 mb-4">Guest List</h2> --}}
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
        </div>
    </div>
</section>