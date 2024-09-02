<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Dflydev\DotAccessData\Data;

it('can be instantiated', function () {
    // AAA

    // Arrange = Mise en place de l'environnement
    $product = Product::factory()->create();

    // Act = Exécution du code
    // Assert = Vérification des résultats
    expect($product)->toBeInstanceOf(Product::class);
});

it('can be updated', function () {
    $product = Product::factory()->create();

    $product->update([
        'name' => 'New Name',
    ]);

    expect($product->name)->toBe('New Name');
});

it('can be deleted', function () {
    $product = Product::factory()->create();

    $product->delete();

    expect(Product::all())->toHaveCount(0);
});

it('can be find by id', function () {
    $product = Product::factory()->create();

    $found = Product::find($product->id);

    expect($found->id)->toBe($product->id);
});

it('can be find by slug', function () {
    $product = Product::factory()->create();

    $found = Product::where('slug', $product->slug)->first();

    expect($found->slug)->toBe($product->slug);
});

it('can be find by name', function () {
    $product = Product::factory()->create();

    $found = Product::where('name', $product->name)->first();

    expect($found->name)->toBe($product->name);
});

it('can be sorts by status', function () {
    $falseProducts = Product::factory(2)->create([
        'status' => false,
    ]);

    $trueProducts = Product::factory(4)->create([
        'status' => true,
    ]);

    $found = Product::where('status', true)->get();

    expect($found)->toHaveCount(4)
    ->and($found->first()->id)->toBe($trueProducts->first()->id);
});

it('belongs to a brand', function () {
    $brand = Brand::factory()->create();
    $product = Product::factory()
        ->for($brand)
        ->create();

    expect($product->brand->id)->toBe($brand->id);
});

it('belongs to a category', function () {
    $category = Category::factory()->create();
    $product = Product::factory()
        ->for($category)
        ->create();

    expect($product->category->id)->toBe($category->id);
});

it('has many variants', function () {
    $product = Product::factory()
        ->hasVariants(3)
        ->create();

    expect($product->variants)->toHaveCount(3);
});

it('has many images', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    expect($product->images)->toHaveCount(3);
});

it('has main image', function () {
    $product = Product::factory()
        ->hasImages(3)
        ->create();

    $product->images->first()->update([
        'main' => 1,
    ]);

    $mainImage = $product->images->first();

    expect($mainImage->main)->toBe(1);
});

it('has many comments', function () {
    $product = Product::factory()
        ->hasComments(3)
        ->create();

    expect($product->comments)->toHaveCount(3);
});

it('has a name', function () {
    $product = Product::factory()->create();

    expect($product->name)->toBeString();
});

it('has a slug', function () {
    $product = Product::factory()->create();

    expect($product->slug)->toBeString();
});

it('has a description', function () {
    $product = Product::factory()->create();

    expect($product->description)->toBeString();
});

it('has a price', function () {
    $product = Product::factory()->create();

    expect($product->price)->toBeFloat();
});

it('has a status', function () {
    $product = Product::factory()->create();

    expect($product->status)->toBeBool();
});

it('has a usage', function () {
    $product = Product::factory()->create();

    expect($product->usage)->toBeString();
});

it('has a formatted price', function () {
    $product = Product::factory()->create([
        'price' => 814.9,
    ]);

    expect($product->getFormattedPrice())->toBe('$814,90');
});

it('get deleted when brand is deleted', function () {
    $brand = Brand::factory()
        ->hasProducts(3)
        ->create();

    $brand->delete();

    expect(Product::all())->toHaveCount(0);
});

it('get deleted when category is deleted', function () {
    $category = Category::factory()
        ->hasProducts(3)
        ->create();

    $category->delete();

    expect(Product::all())->toHaveCount(0);
});

it('can be searched by name', function () {
    $product = Product::factory()->create([
        'name' => 'Product 1',
    ]);

    $found = Product::search('Product 1');

    expect($found)->toHaveCount(1)
    ->and($found->first()->id)->toBe($product->id);
});

it('can be searched by brand name', function () {
    $brand = Brand::factory()->create([
        'name' => 'Brand 1',
    ]);

    $product = Product::factory()->create([
        'name' => 'Product 1',
        'brand_id' => $brand->id,
    ]);

    $found = Product::search('Brand 1');

    expect($found)->toHaveCount(1)
    ->and($found->first()->id)->toBe($product->id);
});

it('can get amount', function () {
    $product = Product::factory()->create([
        'price' => 814.9,
    ]);

    expect($product->getAmount())->toBe(81490);
});
