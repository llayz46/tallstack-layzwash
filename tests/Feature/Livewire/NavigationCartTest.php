<?php

use App\Livewire\Cart\Navigation;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Navigation::class)
        ->assertStatus(200);
});
