<?php

// namespace App\Http\Livewire;

// use App\Models\Reports;
// use Livewire\Component;

// class Report extends Component
// {
//     public function render()
//     {
//         $this->report=Reports::all();
//         $reports=$this->report;
//         return view('livewire.report', compact('reports'));
//         return view('livewire.report');
//     }
// }


namespace App\Http\Livewire;

use App\Models\Reports;
use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Report extends Component
{
    public $reports;
    public function mount()
    {
        $this->reports = Reports::all();
        //dd($this->reports);
    }
    
    // public function index()
    // {
    //     $reports = Reports::all()
    //     						->select('sum(entry) AS saldo');
    //     return view('livewire.report',compact('data'));
    //     return view('klasemenperelisprint.index', compact ('klasemenperelisprints'))
    //                 ->with('i', (request()->input('page',1) -1) *10);
    // }
    public function render()
    {
        return view('livewire.report');
    }

    // public function create()
    // {
    //     return view('livewire.report');
    // }


    // public function delete($id) {

    //     $data = Reports::find($id);
    //     $data -> delete();
    //     return redirect()->route('dashboard')->with('success','Data berhasil di Delete');
    // }

}

