<?php

use App\Livewire\Auth\Register;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Register::class)
        ->assertStatus(200);
});

it('display the auth.register page', function () {
    $response = $this->get(route('auth.register'));
    $response->assertStatus(200);
    $response->assertSeeLivewire('auth.register');
});

it('redirects to home if user is logged in', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test(Register::class)
        ->assertRedirect(route('home'));
});

it('display validation error for empty first name', function () {
    Livewire::test(Register::class)
        ->set('form.first_name', '')
        ->assertHasErrors(['form.first_name' => 'required'])
        ->assertSee('The first name field is required');
});

it('display validation error for empty last name', function () {
    Livewire::test(Register::class)
        ->set('form.last_name', '')
        ->assertHasErrors(['form.last_name' => 'required'])
        ->assertSee('The last name field is required');
});

it('display validation error for invalid email', function () {
    Livewire::test(Register::class)
        ->set('form.email', 'invalid-email')
        ->assertHasErrors(['form.email' => 'email'])
        ->assertSee('The email must be a valid email address');
});

it('display validation error for empty email', function () {
    Livewire::test(Register::class)
        ->set('form.email', '')
        ->assertHasErrors(['form.email' => 'required'])
        ->assertSee('The email field is required');
});

it('display validation error for non unique email', function () {
    $user = User::factory()->create([
        'email' => 'test@test.fr'
    ]);

    Livewire::test(Register::class)
        ->set('form.email', 'test@test.fr')
        ->assertHasErrors(['form.email' => 'unique'])
        ->assertSee('The email has already been taken');
});

it('display validation error for empty password', function () {
    Livewire::test(Register::class)
        ->set('form.password', '')
        ->assertHasErrors(['form.password' => 'required'])
        ->assertSee('The password field is required');
});

it('display validation error for password confirmation', function () {
    Livewire::test(Register::class)
        ->set('form.password', 'password')
        ->set('form.password_confirmation', 'password_confirmation')
        ->call('register')
        ->assertSee('The password confirmation does not match')
        ->assertHasErrors(['form.password' => 'confirmed']);
});

it('display validation error for empty password confirmation', function () {
    Livewire::test(Register::class)
        ->set('form.password_confirmation', '')
        ->assertHasErrors(['form.password_confirmation' => 'required'])
        ->assertSee('The password confirmation field is required');
});

it('logs in the user and redirects to home', function () {
    Livewire::test(Register::class)
        ->set('form.first_name', 'John')
        ->set('form.last_name', 'Doe')
        ->set('form.email', 'test@test.fr')
        ->set('form.password', 'password')
        ->set('form.password_confirmation', 'password')
        ->call('register')
        ->assertRedirect(route('verification.notice'));

    $this->assertAuthenticated();
});

it('does not log in the user if the form is invalid', function () {
    Livewire::test(Register::class)
        ->set('form.first_name', 'John')
        ->set('form.last_name', 'Doe')
        ->set('form.email', 'test@test.fr')
        ->set('form.password', 'password')
        ->set('form.password_confirmation', 'password_confirmation')
        ->call('register')
        ->assertHasErrors(['form.password' => 'confirmed']);

    $this->assertGuest();
});
