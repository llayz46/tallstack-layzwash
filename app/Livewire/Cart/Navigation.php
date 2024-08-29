<?php

namespace App\Livewire\Cart;

use App\Factories\CartFactory;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Navigation extends Component
{
    #[Computed]
    #[On(['productAddedToCart', 'productRemovedFromCart'])]
    public function getCountProperty()
    {
        return CartFactory::make()->items()->sum('quantity');
    }
}
