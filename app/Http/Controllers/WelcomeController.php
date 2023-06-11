<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::take(15)->where('status', 2)->get();
        $category = Category::first();

        return view('welcome', compact('products'))->with('category', $category);
    }
}
