<?php

use App\Livewire\Admin;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Admin::class)
        ->assertStatus(200);
});
