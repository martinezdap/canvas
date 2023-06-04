<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SliderProducts extends Component
{
    public $products;

    public $productsList = [];

    public function loadPosts(){
        $this->productsList = $this->products;

        $this->emit('glider');
    }

    public function render()
    {
        return view('livewire.slider-products');
    }
}
