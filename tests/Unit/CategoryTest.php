<?php

use App\Models\Category;

it('can be created', function () {
    $category = Category::factory()->create();

    expect($category)->toBeInstanceOf(Category::class);
});

it('can have products', function () {
    $category = Category::factory()->hasProducts(3)->create();

    expect($category->products)->toHaveCount(3);
});

test('products can be sorts by category', function () {
    $category = Category::factory()->hasProducts(3)->create();

    $products = $category->products()->get();

    expect($products)->toHaveCount(3);
});
