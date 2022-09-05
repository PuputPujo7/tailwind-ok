<?php

namespace App\Http\Livewire;

use Livewire\WithPagination;
use App\Models\Guests;
use Illuminate\Http\Request;
use Livewire\Component;

class Guest extends Component
{
    use WithPagination;
    public $group;
    public $name;
    public $nik;
    public $email;
    public $phone;
    public $address;
    public $meet;
    public $agenda;
    public $spt;
    public $paging, $search;
    public $toast;


    // public function mount()
    // {
    //     $this->paging = 5;
    // }
  
    public function submit()
    {
        // $data = new Guests;
        // $data->name = $this->name;
        // $data->group = $this->group;
        // $data->nik = $this->nik;
        // $data->email = $this->email;
        // $data->phone = $this->phone;
        // $data->address = $this->address;
        // $data->meet = $this->meet;
        // $data->agenda = $this->agenda;
        // $data->spt = $this->spt;
        // $data->save();
        $data = $this->validate([
            'group' => 'required',
            'name' => 'required',
            'nik' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'meet' => 'required',
            'agenda' => 'required',
            'spt' => 'nullable',
        ]);
  
        Guests::create($data);
        $data=$this->toast;
        return Redirect()->route('guest')->with('success','Data tamu sudah disimpan');
        // return Redirect()->route('guest');
        // return back()->withInput();
    }

    public function render()
    {
        if ($this->search) {
            $data = Guests::where(function ($query) {
                $query
                ->where('name', 'like', "%$this->search%")
                ->orWhere('nik', 'like', "%$this->search%")
                ->orWhere('address', 'like', "%$this->search%");
            })
            ->orderBy('id', 'desc')->paginate($this->paging);
        } else {
            $data = Guests::orderBy('id', 'desc')->paginate($this->paging);
        }

        $this->guest=Guests::all();
        $guests=$this->guest;
        return view('livewire.guest', compact('guests'));
    }
    // public function create() {
    //     $data = Guests::all ();
    //     return view('livewire.guest',compact('guests'));
    
    // }



}
