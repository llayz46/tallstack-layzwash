<?php

use App\Livewire\Auth\Login;
use App\Models\User;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Login::class)
        ->assertStatus(200);
});

it('redirects to home if user is logged in', function () {
    $user = User::factory()->create();
    $this->actingAs($user);

    Livewire::test(Login::class)
        ->assertRedirect(route('home'));
});

it('display validation error for invalid email', function () {
    Livewire::test(Login::class)
        ->set('form.email', 'invalid-email')
        ->assertHasErrors(['form.email' => 'email']);
});

it('display validation error for empty email', function () {
    Livewire::test(Login::class)
        ->set('form.email', '')
        ->assertHasErrors(['form.email' => 'required']);
});

it('display validation error for empty password', function () {
    Livewire::test(Login::class)
        ->set('form.password', '')
        ->assertHasErrors(['form.password' => 'required']);
});

it('display validation error for invalid credentials', function () {
    $user = User::factory()->create();

    Livewire::test(Login::class)
        ->set('form.email', $user->email)
        ->set('form.password', 'invalid-password')
        ->call('login')
        ->assertHasErrors(['form.email' => 'These credentials do not match our records.']);
});

it('logs in user with valid credentials', function () {
    $user = User::factory()->create([
        'email' => 'mail@livewire.fr',
        'password' => bcrypt('password'),
    ]);

    Livewire::test(Login::class)
        ->set('form.email', $user->email)
        ->set('form.password', 'password')
        ->call('login')
        ->assertHasNoErrors(['form.email', 'form.password'])
        ->assertRedirect(route('home'));

    $this->assertTrue(auth()->check());
    $this->assertEquals(auth()->user()->id, $user->id);
});

it('display the auth.login page', function () {
    $response = $this->get(route('auth.login'));
    $response->assertStatus(200);
    $response->assertSeeLivewire('auth.login');
});
