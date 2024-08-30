<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class SendVerificationEmail extends Component
{
    use WireUiActions;

    public function sendVerificationEmail()
    {
        $user = Auth::user();

        if($user->hasVerifiedEmail()) {
            return redirect()->intended(route('home'));
        }

        $user->sendEmailVerificationNotification();

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Mail sent!',
            'description' => 'Verification link successfully sent!',
        ]);
    }
}
