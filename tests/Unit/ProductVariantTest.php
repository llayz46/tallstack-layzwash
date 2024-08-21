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
