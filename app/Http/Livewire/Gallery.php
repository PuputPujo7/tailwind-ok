<?php

namespace App\Http\Livewire;

use App\Models\Galleries;
use App\Models\Sliders;
use Livewire\Component;

class Gallery extends Component
{
    // public function render()
    // {
    //     $this->gallery=Galleries::all();
    //     $galleries=$this->gallery;
    //     return view('livewire.gallery', compact('galleries'));
        // return view('livewire.gallery');
    // }

    public function render()
    {
        $this->slider=Sliders::all();
        $sliders=$this->slider;
        return view('livewire.gallery', compact('sliders'));
        // return view('livewire.gallery');
    }
}
