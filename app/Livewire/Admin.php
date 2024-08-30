<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => false, 'title' => 'Admin panel'])]
class Admin extends Component
{
    public $isAdminActive = false;
    public $isAccountActive = false;

    public function mount()
    {
        $this->isAdminActive = request()->routeIs('admin');
    }

    public function render()
    {
        return view('livewire.admin');
    }
}
