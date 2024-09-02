<?php

use App\Livewire\Product\Products;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Products::class)
        ->assertStatus(200);
});
