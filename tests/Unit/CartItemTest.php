<?php

use App\Models\CartItem;
use App\Models\Product;
use App\Models\User;

it('belongs to a cart', function () {
    $cart = User::factory()->create()->cart()->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => Product::factory()->hasVariants(1)->create()->variants->first()->id,
        'quantity' => 1,
    ]);

    expect($cartItem->cart->id)->toBe($cart->id);
});

it('belongs to a product variant', function () {
    $product = Product::factory()->hasVariants(1)->create();
    $variant = $product->variants->first();

    $cart = User::factory()->create()->cart()->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $variant->id,
        'quantity' => 1,
    ]);

    expect($cartItem->variant->id)->toBe($variant->id);
});

it('has a quantity', function () {
    $cart = User::factory()->create()->cart()->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => Product::factory()->hasVariants(1)->create()->variants->first()->id,
        'quantity' => 8,
    ]);

    expect($cartItem->quantity)->toBe(8);
});
