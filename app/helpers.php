<?php 

use App\Models\Product;
use App\Models\Size;
use Gloudemans\Shoppingcart\Facades\Cart;

// Se recupera la cantidad de stock de cualquier producto
function quantity($product_id, $color_id = null, $size_id = null){
    $product = Product::find($product_id);

    if ($size_id) {
        $size = Size::find($size_id);
        $quantity = $size->colors->find($color_id)->pivot->quantity;
    } elseif($color_id) {
        $quantity = $product->colors->find($color_id)->pivot->quantity;
    } else {
        $quantity = $product->quantity;
    }
    return $quantity;
}

// Calcular la cantidad de items agregados
function qty_added($product_id, $color_id = null, $size_id = null){
    $cart = Cart::content();

    $item = $cart->where('id', $product_id)
                ->where('options.color_id', $color_id)
                ->where('options.size_id', $size_id)
                ->first();

    if ($item) {
        return $item->qty;
    } else {
        return 0;
    }
}

// Se calcula la resta de los items agregados sobre el stock existente
function qty_available($product_id, $color_id = null, $size_id = null){
    return quantity($product_id, $color_id, $size_id) - qty_added($product_id, $color_id, $size_id);
}