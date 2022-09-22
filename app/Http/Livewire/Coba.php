<?php

namespace App\Http\Livewire;

use App\Models\Reports;
use App\Models\Sliders;
use App\Models\User;
use Livewire\Component;

class Coba extends Component
{
    public function render()
    {
        $this->sliders=Sliders::all();
        $sliders=$this->sliders;
        return view('livewire.coba', compact('sliders'));
        // return view('livewire.coba');
    }
    public $reports;
    public $users;
    public function mount()
    {
        $this->reports = Reports::all();
        //dd($this->reports);

        $this->users = User::all();
        //dd($this->reports);
    }
}
