<?php

namespace App\Livewire\Cart;

use App\Factories\CartFactory;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    public function getCartProperty()
    {
        return CartFactory::make();
    }

    #[On('productAddedToCart')]
    public function getItemsProperty()
    {
        return $this->cart->items;
    }

    public function increment($itemId)
    {
        $this->cart->items()->find($itemId)?->increment('quantity');
        $this->dispatch('productAddedToCart');
    }

    public function decrement($itemId)
    {
        $item = $this->cart->items()->find($itemId);
        if ($item->quantity > 1) {
            $item->decrement('quantity');
            $this->dispatch('productRemovedFromCart');
        }
    }

    public function delete($itemId)
    {
        $this->cart->items()->where('id', $itemId)->delete();

        $this->dispatch('productRemovedFromCart');
    }

    public function getTotalProperty()
    {
        $total = 0;

        foreach ($this->cart->items as $item) {
            $total += $item->quantity * $item->product->price;
        }

        return $total;
    }
}
