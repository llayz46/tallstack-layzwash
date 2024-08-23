<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\LoginForm;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app', ['header' => false, 'title' => 'Login'])]
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

        if (auth()->attempt($credentials)) {
            session()->regenerate();
            return redirect()->intended(route('home'));
        }

        $this->addError('form.email', 'These credentials do not match our records.');
    }
}
