<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sliders extends Model
{
 
    use HasFactory;
    protected $guarded=[];
    public function show(){
        return view('livewire.slider');
        }
}
