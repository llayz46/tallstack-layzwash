<?php

use App\Models\Product;

it('can create a product with images', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    expect($product->images)->toHaveCount(3);
});

it('can remove images from product', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    $product->images()->delete();

    expect($product->images)->toHaveCount(0);
});

it('can add images to product', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    $product->images()->create([
        'path' => 'images/new-image.jpg',
    ]);

    expect($product->images)->toHaveCount(4);
});

it('can update images of product', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    $product->images()->update([
        'path' => 'images/updated-image.jpg',
    ]);

    expect($product->images->first()->path)->toBe('images/updated-image.jpg');
});

it('can set main image of product', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    $product->images()->first()->update([
        'main' => true,
    ]);

    expect($product->images->first()->main)->toBe(1);
});

it('belongs to a product', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    expect($product->images->first()->product->id)->toBe($product->id);
});
