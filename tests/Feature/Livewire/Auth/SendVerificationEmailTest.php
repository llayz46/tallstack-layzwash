<?php

use App\Livewire\Auth\SendVerificationEmail;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(SendVerificationEmail::class)
        ->assertStatus(200);
});
