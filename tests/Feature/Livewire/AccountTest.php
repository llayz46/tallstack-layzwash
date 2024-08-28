<?php

use App\Livewire\Account;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    $user = User::factory()->create();

    $this->actingAs($user);

    Livewire::test(Account::class)
        ->assertStatus(200);
});
