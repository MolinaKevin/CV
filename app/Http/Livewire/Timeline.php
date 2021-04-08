<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Step;

class Timeline extends Component
{

    public $more = false;

    public $active = 8;

    protected $listeners = [
        'timelineSelect' => 'showMore'
    ];

    public function mount() {
        $this->active = Step::orderBy('init','DESC')->first()->id;
    }

    public function render()
    {
        return view('curriculum.timeline',[
            'steps' => Step::orderBy('init','DESC')->get()
        ])->layout('layouts.cv');
    }

    public function showMore($id)
    {
        $this->active = $id;
    }
}
