<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterForm extends Form
{
    #[Validate('required', message: 'The first name field is required')]
    #[Validate('min:2', message: 'The first name need to be at least 2 characters')]
    #[Validate('max:100', message: 'The first name may not be greater than 100 characters')]
    public string $first_name;

    #[Validate('required', message: 'The last name field is required')]
    #[Validate('min:2', message: 'The last name need to be at least 2 characters')]
    #[Validate('max:100', message: 'The last name may not be greater than 100 characters')]
    public string $last_name;

    #[Validate('required', message: 'The email field is required')]
    #[Validate('email', message: 'The email must be a valid email address')]
    #[Validate('unique:users,email', message: 'The email has already been taken')]
    public string $email;

    #[Validate('required', message: 'The password field is required')]
    #[Validate('min:8', message: 'The password must be at least 8 characters')]
    #[Validate('max:100', message: 'The password may not be greater than 100 characters')]
    #[Validate('confirmed', message: 'The password confirmation does not match')]
    public string $password;

    #[Validate('required', message: 'The password confirmation field is required')]
    #[Validate('min:8', message: 'The password confirmation must be at least 8 characters')]
    #[Validate('max:100', message: 'The password confirmation may not be greater than 100 characters')]
    public string $password_confirmation;
}
