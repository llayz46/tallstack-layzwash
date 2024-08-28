<?php

use App\Models\Cart;
use App\Models\Product;
use App\Models\User;

it('can be instantiated', function () {
    $cart = User::factory()->create()->cart()->create();

    expect($cart)->toBeInstanceOf(\App\Models\Cart::class);
});

it('belongs to an user', function () {
    $user = User::factory()->create();

    $cart = $user->cart()->create();

    expect($cart->user)->toBeInstanceOf(User::class)
        ->and($cart->user->id)->toBe($user->id);
});

it('belongs to an session id', function () {
    $sessionId = session()->getId();

    $cart = Cart::firstOrCreate(['session_id' => $sessionId]);

    expect($cart->session_id)->toBe($sessionId);
});

it('can have item', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 1,
    ]);

    expect($cart->items)->toHaveCount(1)
        ->and($cart->items->first()->id)->toBe($cartItem->id);
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

it('can have total', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 1,
    ]);

    expect($cart->total)->toBe($cartItem->total);
});

it('can have total quantity', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 1,
    ]);

    $totalQuantity = $cart->items->sum('quantity');

    expect($totalQuantity)->toBe($cartItem->quantity);
});

it('can have total price with many items', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 4,
    ]);

    $totalPrice = 0;
    foreach ($cart->items as $item) {
        $totalPrice += $item->quantity * $item->product->price;
    }

    expect($totalPrice)->toBe($cartItem->product->price * $cartItem->quantity);
});

it('can have total price with many items and different quantity', function () {
    $cart = User::factory()->create()->cart()->create();

    $product = Product::factory()->hasVariants(1)->create();

    $cartItem = $cart->items()->create([
        'product_variant_id' => $product->variants->first()->id,
        'quantity' => 4,
    ]);

    $product2 = Product::factory()->hasVariants(1)->create();

    $cartItem2 = $cart->items()->create([
        'product_variant_id' => $product2->variants->first()->id,
        'quantity' => 2,
    ]);

    $totalPrice = 0;
    foreach ($cart->items as $item) {
        $totalPrice += $item->quantity * $item->product->price;
    }

    expect($totalPrice)->toBe($cartItem->product->price * $cartItem->quantity + $cartItem2->product->price * $cartItem2->quantity);
});
