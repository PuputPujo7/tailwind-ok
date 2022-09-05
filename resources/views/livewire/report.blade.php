<section class="container mx-auto pt-5 justify-center z-0 w-full top-12">
    <div class="mx-auto w-full">
        {{-- <div class="bg-blue-50 container mx-auto py-6 px-4 w-full" x-data="datatables()" x-cloak> --}}
        <h1 class="text-3xl py-4 border-b mb-5 bg-blue-100 rounded-lg text-center">Datatable</h1>
        <div class="overflow-x-auto bg-blue-100 rounded-lg shadow overflow-y-auto relative w-full px-3"
            style="height: 405px;">

            <!-- component -->
            {{-- <section class="container mx-auto p-6 font-mono w-full bg-red-200 overflow-hidden rounded-lg shadow-lg"> --}}
            <form action="">
                <div class="container px-3 mt-3 mb-3 md:mb-0 md:w-1/2 w-full lg:w-6/12">
                    <button type="button"
                        class="border border-red-500 bg-red-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-red-600 focus:outline-none focus:shadow-outline">
                        <a href="/exportpdf">Export PDF</a>
                    </button>
                    <button type="button"
                        class="border border-green-500 bg-green-500 text-white rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:bg-green-600 focus:outline-none focus:shadow-outline">
                        <a href="/exportpdf">Export Excel</a>
                    </button>

                    <Input wire:model="livewire.index" type="text"
                        class="shadow appereance-none boder rounded w-full py-2 px-3 text-blue-800 mt-2 lg:w-1/2"
                        placeholder="Search Data...">



                </div>

                {{-- <div class="md:w-1/2 px-3 mt-3 mb-3 md:mb-0 sm:r">
                    <Input wire:model="livewire.index" type="text"
                        class="shadow appereance-none boder rounded w-full py-2 px-3 text-blue800 mt-2"
                        placeholder="Search Data...">
                </div> --}}
            </form>
            <div class="w-auto overflow-hidden rounded-lg shadow-lg mt-3">
                <div class="w-full overflow-x-auto">
                    <table class="w-full">
                        <thead>
                            {{-- <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3">Name</th>
                            <th class="px-4 py-3">Age</th>
                            <th class="px-4 py-3">Status</th>
                            <th class="px-4 py-3">Date</th>
                            </tr> --}}
                            <tr
                                class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">No
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-30 sm:center text-center">Tanggal
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-auto sm:center text-center">Keterangan
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">Pemasukkan
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-1/8 sm:center text-center">Pengeluaran
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 border-b border-l border-r w-1/6 sm:center text-center">Saldo Akhir
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
                                {{-- @php
                                
                                $a = $row->entry;
                                $b = $row->out;
                                
                            @endphp --}}
                                <td class="px-4 py-3 text-sm border w-auto">
                                    Rp. {{ number_format((int) $row->saldo) }}
                                </td>
                            </tr>
                            @endforeach
                            <tr class="text-gray-700">
                                {{-- @php
                                
                                $a = $row->entry;
                                $b = $row->out;
                                
                            @endphp --}}
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
                </div>
            </div>
        </div>
    </div>
</section>
