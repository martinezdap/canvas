<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Livewire\ShoppingCart;

Route::get('/', WelcomeController::class);

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

route::get('search', SearchController::class)->name('search');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

route::get('shopping-cart', ShoppingCart::class)->name('shopping-cart');

Route::get('sobrenosotros', function(){
    return view('sobrenosotros');
})->name('sobrenosotros');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::redirect('/dashboard', '/');
});