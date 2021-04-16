<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
    public $modal = false;
    public $alert = false;
    public $retorno;

    protected $listeners = [
        'showAlert',
        'message'
    ];


    public function showModal() {
        $this->modal = true;
    }

    public function showAlert() {
        $this->alert = true;
        $this->modal = false;
    }

    public function message($content) {
        $this->retorno = $content;
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
