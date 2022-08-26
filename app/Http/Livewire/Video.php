<?php

namespace App\Http\Livewire;

use App\Models\Videos;
use Livewire\Component;

class Video extends Component
{
    public function render()
    {
        // return view('livewire.video');
        $this->video=Videos::all();
        $videos=$this->video;
        return view('livewire.video', compact('videos'));
    }
}
