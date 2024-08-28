<?php

use App\Models\Product;
use App\Models\ProductVariant;

it('can be created', function () {
    $product = Product::factory()
        ->hasVariants(3)
        ->create();

    expect($product->variants)->toHaveCount(3);
});

it('can have variant', function () {
    $product = Product::factory()->create();
    $productVariant = ProductVariant::factory()->for($product)->create();

    expect($product->variants)->toHaveCount(1);
});

it('can have multiple variants', function () {
    $product = Product::factory()
        ->hasVariants(3)
        ->create();

    expect($product->variants)->toHaveCount(3);
});

it('can have a name', function () {
    $product = Product::factory()->create([
        'name' => 'Test',
    ]);

    expect($product->name)->toBe('Test');
});

it('can have a description', function () {
    $product = Product::factory()->create([
        'description' => 'Test',
    ]);

    expect($product->description)->toBe('Test');
});

it('can have a price', function () {
    $product = Product::factory()->create([
        'price' => 10.5,
    ]);

    expect($product->price)->toBe(10.5);
});
