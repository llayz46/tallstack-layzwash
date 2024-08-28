<?php

use App\Models\Product;
use App\Models\User;

it('belongs to an user', function () {
    $user = User::factory()->create();

    $cart = $user->cart()->create();

    expect($cart->user)->toBeInstanceOf(User::class)
        ->and($cart->user->id)->toBe($user->id);
});

it('has many items', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 1,
    ]);

    expect($cart->items)->toHaveCount(1)
        ->and($cart->items->first()->id)->toBe($cartItem->id);
});

it('belongs to a cart', function () {
    $cart = User::factory()->create()->cart()->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => Product::factory()->hasVariants(1)->create()->variants->first()->id,
        'quantity' => 1,
    ]);

    expect($cartItem->cart->id)->toBe($cart->id);
});
