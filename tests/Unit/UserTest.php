<?php

use App\Models\User;

it('can be instantiated', function () {
    // AAA

    // Arrange = Mise en place de l'environnement
    $user = User::factory()->create();

    // Act = Exécution du code
    // Assert = Vérification des résultats
    expect($user)->toBeInstanceOf(User::class);
});

it('can update the first name', function () {
    $user = User::factory()->create();

    $user->first_name = 'Test';

    expect($user->first_name)->toBe('Test');
});

it('can update the last name', function () {
    $user = User::factory()->create();

    $user->last_name = 'Test';

    expect($user->last_name)->toBe('Test');
});

it('can update the email', function () {
    $user = User::factory()->create();

    $user->email = 'test@test.test';

    expect($user->email)->toBe('test@test.test');
});

it('can update the avatar', function () {
    $user = User::factory()->create();

    $user->avatar = 'https://example.com/avatar.jpg';

    expect($user->avatar)->toBe('https://example.com/avatar.jpg');
});

it('can delete an user', function () {
    $user = User::factory()->create();

    $user->delete();

    expect(User::find($user->id))->toBeNull();
});
