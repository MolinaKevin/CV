<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{
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
