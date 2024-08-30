<?php

namespace App\Livewire\Auth;

use App\Actions\Cart\MigrateSessionCart;
use App\Factories\CartFactory;
use App\Livewire\Forms\LoginForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => false, 'title' => 'Login'])]
class Login extends Component
{
    public LoginForm $form;

    public function mount()
    {
        if (!auth()->guest()) {
            return redirect()->route('home');
        }
    }

    public function login()
    {
        $credentials = $this->validate();

        $user = User::where('email', $credentials['email'])->first();

        if ($user && \Hash::check($credentials['password'], $user->password)) {
            (new MigrateSessionCart)->migrate(CartFactory::make(), $user->cart ?: $user->cart()->create());
        }

        if (auth()->attempt($credentials)) {
            session()->regenerate();

            return redirect()->intended(route('home'));
        }

        $this->addError('form.email', 'These credentials do not match our records.');
    }
}
