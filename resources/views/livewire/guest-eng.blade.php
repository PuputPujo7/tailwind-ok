<div class="bg-blue-50 mx-auto py-6 px-4 w-full grid gap-3 mb-3 sm:grid-cols-2 lg:grid-cols-2">
    <div class="dropdown-menu absolute max-w-sm rounded shadow-lg top-10 right-0 mt-16">
        <div class="px-3 sticky top-0 [other classes here]">
            <ul>
                <li class="flex items-center justify-center h-8 w-12">
                    <a href="">
                        <img src="english.jpg" alt="" class="h-6 w-auto"> 
                        {{-- <i class="fa fa-angle-down"></i> --}}
                    </a>
                    <ul class="">
                            <a href="/guest">
                                <img src="ina.png" alt=""> 
                            </a>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    {{-- <div class="px-4 py-6 gap-x-6 max-w-4xl mx-auto bg-blue-100 rounded shadow"> --}}
        <div class="px-4 py-6 gap-x-6 max-w-4xl mx-auto bg-blue-100 rounded shadow w-full">
            <div class="mb-3 mt-3">
                <form wire:submit.prevent="submit" class="">
                    <div class="mt-3">    
                        <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 underline">Guest Book</h2>
                            <div class="mt-4">
                                <p class="mb-1 text-gray-700 font-semibold text-sm">Guest Group (Personal/ Company - Institution)
                                </p>
                                <div wire:model="group"
                                    class="flex space-x-4 my-2 items-center grid gap-6 mb-3 sm:grid-cols-2 lg:grid-cols-2"placeholder="Personal/ Company - Institution" 
                                    required>
                                    <select name="" id=""
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Personal/ Company/ Institution" required>
                                        {{-- <option value="-">Select please.. </option> --}}
                                        <option value="Personal">Personal </option>
                                        <option value="Company/ Institution">Company/ Institution </option>

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
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Name/
                                        Company</label>
                                    <input type="text" wire:model="name"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="Name/ Company" required>
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
                                        placeholder="example@email.com" required>
                                </div>
                                <div>
                                    <label for="phone"
                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Phone
                                        Number</label>
                                    <input type="tel" wire:model="phone" id="phone"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                        placeholder="081234567890" required>
                                    {{-- pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required> --}}
                                </div>

                            </div>
                            <div class="mb-3">
                                <label for="address"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Address</label>
                                <textarea name="" wire:model="address" id="" cols="30" rows="10"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="Jl. ...." required></textarea>
                                {{-- <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jl. ...." required> --}}
                            </div>
                            <div class="mb-3">
                                <label for="meet"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Meet To</label>
                                <input type="text" wire:model="meet"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="To ...." required>
                            </div>
                            <div class="mb-3">
                                <label for="agenda"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Agenda</label>
                                <input type="text" wire:model="agenda"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="For ...." required>
                            </div>
                            <div class="mb-3">
                                <label for="spt"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">SPT Number (If
                                    Any)</label>
                                <input type="tel" wire:model="spt"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    placeholder="123456789...">
                            </div>

                            <button type="submit"
                                class="w-auto p-4 mt-4 text-center justify-center bg-blue-500 text-black py-2 rounded-md text-lg font-semibold">Submit</button>
                        </div>
                </form>
                @if (session('success'))
                    <div class="mt-2 alert alert-success btn-success text-center justify-center bg-green-500 text-black py-2 px-2 rounded-md text-lg font-semibold">
                        {{ session('success') }}
                    </div>
                @endif
            </div>
        </div>
    {{-- </div> --}}

        <!-- component -->
        <div class="px-4 py-6 gap-x-6 max-w-4xl mx-auto bg-blue-100 rounded shadow w-full">
            <h2 class="mt-5 text-center text-2xl font-bold text-blue-800 mb-4 underline">Guest List</h2>
            <div class="grid gap-6 mb-6 sm:grid-cols-2 lg:grid-cols-2 row">
                <div class="col-md-3">
                    <select class="form-control" wire:model="paging">
                        <option value="1">1</option>
                        <option value="5">5</option>
                        <option value="10">10</option>
                        <option value="20">20</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                        <option value="500">500</option>
                        <option value="1000">1000</option>
                    </select>
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
                                    Guest
                                </th>
                                <th scope="col" class="px-4 py-3 border-b w-48 sm:center text-center">
                                    Agenda
                                </th>
                                <th scope="col" class="px-4 py-3 border-b w-32 sm:center text-right">
                                    Group
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
                                    Guest
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center text-gray-100">
                                    Agenda
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center text-gray-100">
                                    Group
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
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M3 19v-8.93a2 2 0 01.89-1.664l7-4.666a2 2 0 012.22 0l7 4.666A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-1.14.76a2 2 0 01-2.22 0l-1.14-.76" />
                                                </svg>
                                                <p class="text-lg items-center text-blue-500 underline">{{ $guest->email }}</p>
                                            </div>
                                            <div class="flex mt-3 text-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
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
</div>
