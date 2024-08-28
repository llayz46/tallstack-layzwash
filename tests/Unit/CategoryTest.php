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

it('can have a name', function () {
    $category = Category::factory()->create([
        'name' => 'Test',
    ]);

    expect($category->name)->toBe('Test');
});

it('can have a description', function () {
    $category = Category::factory()->create([
        'description' => 'Test',
    ]);

    expect($category->description)->toBe('Test');
});

it('can have a slug', function () {
    $category = Category::factory()->create([
        'slug' => 'test',
    ]);

    expect($category->slug)->toBe('test');
});
