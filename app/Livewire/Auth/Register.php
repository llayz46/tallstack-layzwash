<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app', ['header' => false, 'title' => 'Register'])]
class Register extends Component
{
    public RegisterForm $form;

    public function mount()
    {
        if (!auth()->guest()) {
            return redirect()->route('home');
        }
    }

    public function register()
    {
        $data = $this->validate();

        $user = User::create($data);

        auth()->login($user);

        return redirect()->route('home');
    }
}
