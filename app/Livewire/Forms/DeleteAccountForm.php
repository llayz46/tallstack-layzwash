<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class DeleteAccountForm extends Form
{
    #[Validate('required', message: 'The password field is required')]
    public string $password = '';
}
