<?php

namespace App\Http\Livewire\Siswa;

use Livewire\WithPagination;

use App\Models\Siswa;
use Livewire\Component;

class Index extends Component
{
    use WithPagination;

    public $paging, $search;

    public $nama, $nip, $alamat;

    public function mount()
    {
        $this->paging = 5;
    }

    public function store()
    {
        //
        $data = new Siswa;
        $data->nama = $this->nama;
        $data->nip = $this->nip;
        $data->alamat = $this->alamat;
        $data->save();

        // $data = $this->validate([
        //     'nama' => 'required',
        //     'nip' => 'required',
        //     'alamat' => 'alamat',
        // ]);

        // Siswa::create($data);
        return redirect('/list-siswa')->with('success', 'Data Sudah Disimpan');
    }

    public function render()
    {
        if ($this->search) {
            $data = Siswa::where(function ($query) {
                $query->where('nama', 'like', "%$this->search%")
                    ->orWhere('nip', 'like', "%$this->search%")
                    ->orWhere('alamat', 'like', "%$this->search%");
            })->orderBy('id', 'desc')->paginate($this->paging);
        } else {
            $data = Siswa::orderBy('id', 'desc')->paginate($this->paging);
        }

        return view('livewire.siswa.index', compact('data'))
            // ->layout('layout')
            ;
    }
}