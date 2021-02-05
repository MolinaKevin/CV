<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class Cart extends Component
{

    public $queryString = ['search' => ['except' => ''], 'type' => ['except' => '']];
    public $selection = [];
    public $selectionIn = [];
    public $selectionOut = [];
    public $selectionDiverse = [];
    public $search = '';
    public $type;
    public $modal = false;

    public function removeProduct($select) {
        foreach($this->selection as $key => $one) {
            if($one["id"] == $select) {
                unset($this->selection[$key]);
            }
        }
    }

    public function addProduct(Product $product) {

    }

    public function removeProducts() {
        $this->selection = [];
    }

    public function showModal() {
        $this->modal = true;
    }

    public function limpiar() {
        $this->search = '';
        $this->type = null;
    }

    public function getTipoProperty()
    {
        switch ($this->type) {
            case 0:
                return "Todos";
                break;
            case 1:
                return "Hard Skills";
                break;
            case 2:
                return "Soft Skills";
                break;
            default:
                return "Todos";
                break;
        }
    }

    public function render()
    {
        return view('curriculum.cart',[
            'products' => Product::
                where('name','LIKE',"%{$this->search}%")
                ->where('tech','LIKE',"%{$this->type}%")
                ->get()
        ])->layout('layouts.cv');
    }
}
