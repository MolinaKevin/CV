<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\{
    Box, Step
};

class Experience extends Component
{
    public $step;
    public $selected;

    protected $listeners = [
        'timelineSelect',
        'changeBox'
    ];

    public function mount() {
        $this->selected = Box::where('step_id',$this->step)->first();
    }
    public function timelineSelect($id) {
        $this->step = $id;
        $box = Step::find($id)->boxes()->first();
        $this->changeBox($box->id);
    }

    public function changeBox($id) {
        $this->selected = Box::where('id',$id)->first();
    }

    public function render()
    {
        return view('curriculum.experience',[
            'boxes' => Box::where('step_id',$this->step)->get(),
            'count' => Box::where('step_id',$this->step)->count()
        ]);
    }
}
