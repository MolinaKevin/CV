<?php

namespace App\Http\Livewire;

use App\Models\Screenshot;
use Livewire\Component;
use App\Models\Step;

class Timeline extends Component
{

    public $more = false;
    public $modal = false;
    public $active = 16;
    public $screen;

    protected $listeners = [
        'timelineSelect' => 'showMore',
        'showModal'
    ];

    public function mount()
    {
        $this->screen = Screenshot::first();
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

    public function showModal(Screenshot $screenshot)
    {
        $this->screen = $screenshot;
        $this->modal = true;
    }
}
