<?php

namespace App\Http\Livewire;

use App\Models\Contacts;
use App\Models\Guests;
use Livewire\Component;

class Contact extends Component
{
    public $group;
    public $name;
    public $nik;
    public $email;
    public $phone;
    public $address;
    public $meet;
    public $agenda;
    public $spt;
  
    public function submit()
    {
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
  
        Contacts::create($data);
        return redirect('/contact')->with('status', 'Data has been Saved');
    }
    public function render()

    {
        $this->guest=Guests::all();
        $guests=$this->guest;
        return view('livewire.contact', compact('guests'));
    }
}
