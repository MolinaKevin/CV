<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Step;

class Timeline extends Component
{
    public function render()
    {
        return view('curriculum.timeline',[
            'steps' => Step::all()
        ])->layout('layouts.cv');
    }
}
