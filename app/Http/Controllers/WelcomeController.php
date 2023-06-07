<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function __invoke()
    {
        $products = Product::take(15)->where('status', 2)->get();

        return view('welcome', compact('products'));
    }
}
