<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;

Route::get('/', WelcomeController::class);

Route::get('categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

route::get('search', SearchController::class)->name('search');
Route::get('products/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('sobrenosotros', function(){
    return view('sobrenosotros');
})->name('sobrenosotros');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('prueba', function(){
    \Cart::destroy();
});