<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Support\Collection;
use Livewire\Component;

class Cart extends Component
{

    public $products = [];
    public $selection = [];


    public function removeProduct($select) {
        foreach($this->selection as $key => $one) {
            if($one["id"] == $select) {
                unset($this->selection[$key]);
            }
        }
    }

    public function addProduct(Product $product) {
        $tmp = false;
        foreach($this->selection as $key => $one) {
            if($one["id"] == $product->id) {
                $tmp = true;
            }
        }
        if ($tmp == false) {
            $this->selection[] = $product;
        }
    }

    public function render()
    {
        $this->products =  Product::all();

        return view('curriculum.cart',[
            'products' => $this->products
        ])->layout('layouts.cv');
    }
}
