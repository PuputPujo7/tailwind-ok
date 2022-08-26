<?php

namespace App\Http\Livewire;

use App\Models\Sliders;
use Livewire\Component;

class Slider extends Component
{
    public function render()
    {
        $this->sliders=Sliders::all();
        $sliders=$this->sliders;
        return view('livewire.slider', compact('sliders'));
        // return view('livewire.slider');
    }
}
