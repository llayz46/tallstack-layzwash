<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required', message: 'The email field is required')]
    #[Validate('email', message: 'The email must be a valid email address')]
    public string $email;

    #[Validate('required', message: 'The password field is required')]
    public string $password;

    #[Validate('boolean')]
    public bool $remember = false;
}
