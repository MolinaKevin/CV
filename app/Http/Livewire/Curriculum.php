<?php

namespace App\Http\Livewire;

use App\Models\Tech;
use Livewire\Component;
use Livewire\WithPagination;

class Curriculum extends Component
{
    use WithPagination;

    public $count = 1;
    public $name = 'PHP';
    public $developer = true;

    public function increment()
    {
        $this->count++ ;
        $this->change();
    }

    public function change()
    {
        $last = Tech::
            where('id', '<=', $this->count)
            ->orderBy('id','DESC')
            ->first();

        $this->name = $last->name;
        $this->developer = $last->developer;
    }


    public function render()
    {
        return view('curriculum.curriculum',[
            'techs' => Tech::
            where('id', '<=', $this->count)
            ->orderBy('priority','ASC')
            ->paginate(4)
        ])->layout('layouts.cv');
    }

}
