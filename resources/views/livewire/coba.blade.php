<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="container">

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form role="form" wire:submit.prevent="store">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama</label>
                            <input wire:model="nama" type="text" class="form-control" placeholder="Nama">
                            @error('nama')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nip</label>
                            <input wire:model="nip" type="text" class="form-control" placeholder="Nip">
                            @error('nip')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Alamat</label>
                            <textarea wire:model="alamat" rows="5" class="form-control"></textarea>
                            @error('alamat')
                                <span style="color: red">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary mb-2">Submit</button>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
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

        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Nip</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $dt)
                            <tr>
                                <td>{{ $dt->nama }}</td>
                                <td>{{ $dt->nip }}</td>
                                <td>{{ $dt->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{ $data->links() }}
        </div>
    </div>
</div>