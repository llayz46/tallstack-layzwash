<?php

use App\Models\CartItem;
use App\Models\Product;

//it('can be instantiated', function () {
//    $product = Product::factory()
//        ->hasVariants(3)
//        ->create();
//
//    $cartItem = CartItem::factory()->create([
//        'product_variant_id' => $product->variants->first()->id,
//    ]);
//
//    expect($cartItem)->toBeInstanceOf(CartItem::class);
//});
//
//it('belongs to a cart', function () {
//    $cartItem = CartItem::factory()->create();
//
//    expect($cartItem->cart)->toBeNotNull();
//});
