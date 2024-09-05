<?php

namespace App\Livewire;

use App\Livewire\Forms\AccountForm;
use App\Livewire\Forms\ChangePasswordForm;
use App\Livewire\Forms\DeleteAccountForm;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;
use WireUi\Traits\WireUiActions;

#[Layout('components.layouts.app', ['header' => false, 'title' => 'Your account'])]
class Account extends Component
{
    use WithFileUploads, WireUiActions;

    public $isAdminActive = false;
    public $isAccountActive = false;

    public User $user;

    public AccountForm $form;

    public ChangePasswordForm $passwordForm;

    public DeleteAccountForm $deleteForm;

    public function mount()
    {
        $this->user = auth()->user();
        $this->form->setUser($this->user);

        $this->isAccountActive = request()->routeIs('account');
    }

    public function save()
    {
        $data = $this->form->validate();

        if ($this->form->avatar) {
            $avatarPath = $this->form->avatar->store('avatars', 'public');

            if ($this->user->avatar) {
                $oldAvatarPath = storage_path('app/public/' . $this->user->avatar);

                if (file_exists($oldAvatarPath)) {
                    unlink($oldAvatarPath);
                }
            }

            $data['avatar'] = $avatarPath;

            $this->reset('form.avatar');
        } else {
            $data['avatar'] = $this->user->avatar;
        }

        if ($this->user->email !== $data['email']) {
            $this->user->email_verified_at = null;
            $this->user->sendEmailVerificationNotification();
        }

        $this->user->update($data);

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Account updated',
            'description' => 'Your account has been updated successfully',
        ]);
    }

    public function changePassword()
    {
        $data = $this->passwordForm->validate();

        if (!Hash::check($data['current_password'], $this->user->password)) {
            $this->passwordForm->addError('current_password', 'The current password is incorrect');
            return;
        }

        $this->user->update([
            'password' => Hash::make($data['new_password']),
        ]);

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Password updated',
            'description' => 'Your password has been updated successfully',
        ]);
    }

    public function destroy()
    {
        $data = $this->deleteForm->validate();

        if (!Hash::check($data['password'], $this->user->password)) {
            $this->reset('deleteForm.password');
            return $this->deleteForm->addError('password', 'The password is incorrect');
        }

        $this->user->delete();
        auth()->logout();

        return $this->redirect('/', navigate: true);
    }
}
