<?php

namespace App\Livewire\Forms;

use App\Models\User;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\WithFileUploads;

class AccountForm extends Form
{
    use WithFileUploads;

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
    public string $email;

        public function rules()
    {
        return [
            'email' => Rule::unique('users', 'email')->ignore($this->user->id),
        ];
    }

    #[Validate('nullable|image|max:2048', message: 'The avatar must be an image and may not be greater than 2MB')]
    public $avatar;

    public ?User $user;
    public function setUser(User $user): void
    {
        $this->user = $user;
        $this->first_name = ucfirst($user->first_name);
        $this->last_name = ucfirst($user->last_name);
        $this->email = strtolower($user->email);
    }
}
