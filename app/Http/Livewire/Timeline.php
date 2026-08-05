<?php

namespace App\Http\Livewire;

use App\Models\Screenshot;
use Livewire\Component;
use App\Models\Step;

class Timeline extends Component
{

    public $more = false;
    public $modal = false;
    public $active = null;
    public $screen;

    protected $listeners = [
        'timelineSelect' => 'showMore',
        'showModal'
    ];

    public function mount()
    {
        $this->screen = Screenshot::first();
    }

    public function render()
    {
        return view('curriculum.timeline',[
            'steps' => Step::orderByRaw("CASE WHEN `key` = ? THEN 0 ELSE 1 END", ['umg-2020'])
                ->orderBy('init', 'DESC')
                ->orderBy('id', 'DESC')
                ->get()
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
