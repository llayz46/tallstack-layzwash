<?php

namespace App\Livewire\Auth;

use App\Livewire\Forms\RegisterForm;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Auth\Events\Registered;

#[Layout('components.layouts.app', ['header' => false, 'title' => 'Register'])]
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

        event(new Registered($user));

        return redirect()->route('verification.notice');
    }
}
