<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => true, 'title' => 'Home'])]
class Home extends Component
{
    public function render()
    {
        return view('livewire.home');
    }
}
