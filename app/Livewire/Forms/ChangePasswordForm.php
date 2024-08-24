<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ChangePasswordForm extends Form
{
    #[Validate('required', message: 'The current password field is required')]
    public string $current_password;

    #[Validate('required', message: 'The password field is required')]
    #[Validate('min:8', message: 'The password must be at least 8 characters')]
    #[Validate('max:100', message: 'The password may not be greater than 100 characters')]
    #[Validate('confirmed', message: 'The password confirmation does not match')]
    public string $new_password;

    #[Validate('required', message: 'The password confirmation field is required')]
    #[Validate('min:8', message: 'The password confirmation must be at least 8 characters')]
    #[Validate('max:100', message: 'The password confirmation may not be greater than 100 characters')]
    public string $new_password_confirmation;
}
