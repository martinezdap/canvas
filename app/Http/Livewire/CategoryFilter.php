<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\WithPagination;

class CategoryFilter extends Component
{
    use WithPagination;

    public $category;
    public $marca;

    public $view ="grid";

    public function limpiar()
    {
        $this->reset('marca');
    }

    public function filterByCategory($categoryId)
    {
        $this->category = Category::findOrFail($categoryId);
    }

    public function render()
    {
        $categories = Category::all();

        $productsQuery = Product::query()->where('status', 2);

        if ($this->category) {
            $productsQuery->whereHas('category', function (Builder $query) {
                $query->where('id', $this->category->id);
            });
        }

        if ($this->marca) {
            $productsQuery->whereHas('brand', function (Builder $query) {
                $query->where('name', $this->marca);
            });
        }

        $products = $productsQuery->paginate(16);

        return view('livewire.category-filter', compact('products', 'categories'));
    }
}

