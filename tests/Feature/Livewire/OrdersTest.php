<?php

use App\Livewire\Orders;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Orders::class)
        ->assertStatus(200);
});
