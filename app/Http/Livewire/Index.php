<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $modal = false;
    public $alert = false;

    protected $listeners = [
        'showAlert',
    ];


    public function showModal() {
        $this->modal = true;
    }

    public function showAlert() {
        $this->alert = true;
        $this->modal = false;
    }

    public function render()
    {
        return view('curriculum.index',[
            'techs' => Product::
            where('inicio',true)
            ->select('name','agregar','antes')
            ->inRandomOrder()
            ->get()
        ])->layout('layouts.cv');
    }
}
