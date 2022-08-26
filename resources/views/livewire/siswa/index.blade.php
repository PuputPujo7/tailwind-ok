<div class="bg-blue-50 mx-auto py-6 px-4 w-full">
    {{-- <div class="bg-blue-50 container mx-auto py-6 px-4 w-full" x-data="datatables()" x-cloak> --}}
    <div class="px-4 py-6 max-w-4xl mx-auto bg-blue-100 rounded">
        <div class="mb-8 mt-2">
            <div class="mb-6 mt-6">
                {{-- @if (session('status'))
                    <div class="mt-2 alert alert-success btn-success text-center justify-center bg-green-500 text-black py-2 px-2 rounded-md text-lg font-semibold">
                        {{ session('status') }}
                    </div>
                @endif --}}
                <form role="form" wire:submit.prevent="store">
                    <div class="box-body grid gap-6 mb-6 sm:grid-cols-2 lg:grid-cols-2">
                        <div>
                            <label for="idcard"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Nama
                                </label>
                            <input type="text" wire:model="nama" id="name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Nama" required>
                        </div>
                        {{-- <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Email</label>
                            <input type="email" wire:model="email" id="email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="example@email.com" required>
                        </div> --}}
                        <div>
                            <label for="phone"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">NIP</label>
                            <input type="tel" wire:model="nip" id="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="331234567890" required>
                            {{-- pattern="[0-9]{4}-[0-9]{4}-[0-9]{4}" required> --}}
                        </div>

                    </div>
                    <div class="mb-6">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alamat</label>
                        <textarea name="" wire:model="alamat" id="" cols="30" rows="10"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full h-16 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Jl. ...." required></textarea>
                        {{-- <input type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jl. ...." required> --}}
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary text-center justify-center bg-blue-500 text-black py-2 px-2 rounded-md text-lg font-semibold">Submit</button>
                    </div>
                </form>
                {{-- @if (session('status'))
                <div class="mt-2 alert alert-success btn-success text-center justify-center bg-green-500 text-black py-2 px-2 rounded-md text-lg font-semibold">
                    {{ session('status') }}
                </div>
            @endif --}}
            @if($message = Session::get('success'))
                                        <div class="alert alert-success" role="alert">
                                        {{$message}}
                                        </div>   
            @endif
        </div>
    </div>

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

            <div class="col-md-4">
                <input wire:model="search" type="text" class="form-control" placeholder="Cari Data..">
            </div>
        </div>

        <div class="bg-white rounded-lg relative w-full row px-3 py-3">
            <div class="col-md-12">
                <table class="table w-full mb-2 rounded">
                    <thead>
                        <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                            <th class="px-4 py-3 border-t border-b border-l border-r w-auto sm:center text-center text-black border-black">Nama</th>
                            <th class="px-4 py-3 border-t border-b border-l border-r w-auto sm:center text-center text-black border-black">Nip</th>
                            <th class="px-4 py-3 border-t border-b border-l border-r w-auto sm:center text-center text-black border-black">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="rounded-lg shadow">
                        @foreach ($data as $dt)
                            <tr>
                                <td class="border-b border-l border-r h-2 w-2">{{ $dt->nama }}</td>
                                <td class="border-b border-l border-r h-2 w-2">{{ $dt->nip }}</td>
                                <td class="border-b border-l border-r h-2 w-2">{{ $dt->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
    </div>
</div>