<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Size;

class AddCartItemSize extends Component
{
    public $product, $sizes, $qty = 1, $quantity = 0, $color_id = "";
    public $size_id = "";

    public $colors = [];

    public function updatedSizeId($value){
        $size = Size::find($value);

        $this->colors = $size->colors;
    }

    public function updatedColorId($value){
        $size = Size::find($this->size_id);
        $this->quantity = $size->colors->find($value)->pivot->quantity;
    }

    public function mount(){
        $this->sizes = $this->product->sizes;
    }

    public function decrement(){
        $this->qty = $this->qty - 1;
    }

    public function increment(){
        $this->qty = $this->qty + 1;
    }

    public function render()
    {
        return view('livewire.add-cart-item-size');
    }
}
