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
    #[Validate('min:8', message: 'The password must be at least 8 characters')]
    #[Validate('max:100', message: 'The password may not be greater than 100 characters')]
    public string $password;
}
