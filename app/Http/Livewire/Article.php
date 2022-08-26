<?php

namespace App\Http\Livewire;

use App\Models\Articles;
use Livewire\Component;


class Article extends Component
{
    public function render()
    {
        $this->article=Articles::all();
        $articles=$this->article;
        return view('livewire.article', compact('articles'));
    }
}
