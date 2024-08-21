<?php

use App\Models\Brand;

it('can be instantiated', function () {
    // AAA

    // Arrange = Mise en place de l'environnement
    $brand = Brand::factory()->create();

    // Act = Exécution du code
    // Assert = Vérification des résultats
    expect($brand)->toBeInstanceOf(Brand::class);
});

it('can be updated', function () {
    $brand = Brand::factory()->create();

    $brand->update([
        'name' => 'New Name',
    ]);

    expect($brand->name)->toBe('New Name');
});

it('can be deleted', function () {
    $brand = Brand::factory()->create();

    $brand->delete();

    expect(Brand::all())->toHaveCount(0);
});

it('can be find by id', function () {
    $brand = Brand::factory()->create();

    $found = Brand::find($brand->id);

    expect($found->id)->toBe($brand->id);
});

it('can be find by slug', function () {
    $brand = Brand::factory()->create();

    $found = Brand::where('slug', $brand->slug)->first();

    expect($found->slug)->toBe($brand->slug);
});

it('can have many products', function () {
    $brand = Brand::factory()
        ->hasProducts(3)
        ->create();

    expect($brand->products)->toHaveCount(3);
});

it('can be sorts by country', function () {
    $frances = Brand::factory(5)->create([
        'country' => 'France',
    ]);

    $italians = Brand::factory(5)->create([
        'country' => 'Italy',
    ]);

    $brands = Brand::orderBy('country')->where('country', 'France')->get();

    expect($brands->first()->country)->toBe('France');
});

it('can have a name', function () {
    $brand = Brand::factory()->create([
        'name' => 'Brand Name',
    ]);

    expect($brand->name)->toBe('Brand Name');
});

it('can have a slug from brand name', function () {
    $brand = Brand::factory()->create();

    expect($brand->slug)->toBe(Str::slug($brand->name));
});

it('can have a logo', function () {
    $brand = Brand::factory()->create([
        'logo' => 'https://example.com/logo.png',
    ]);

    expect($brand->logo)->toBe('https://example.com/logo.png');
});

it('can have a banner', function () {
    $brand = Brand::factory()->create([
        'banner' => 'erzezrerzerzezrerzerz',
    ]);

    expect($brand->banner)->toBe('erzezrerzerzezrerzerz');
});

it('can have a country', function () {
    $brand = Brand::factory()->create([
        'country' => 'France',
    ]);

    expect($brand->country)->toBe('France');
});

it('must have a unique name', function () {
    $brand = Brand::factory()->create([
        'name' => 'Brand Name',
    ]);

    expect($brand->name)->toBe('Brand Name');

    $this->expectException('Illuminate\Database\QueryException');

    Brand::factory()->create([
        'name' => 'Brand Name',
    ]);
});
