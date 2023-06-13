<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class Navigation extends Component
{
    public function render()
    {
        $categories = Category::all();
        $category = Category::first();

        return view('livewire.navigation', compact('categories'))->with('cat', $category);
    }
}
