<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SliderOfertas extends Component
{
    public function loadPosts(){
        $this->emit('glider');
    }

    public function render()
    {
        return view('livewire.slider-ofertas');
    }
}
