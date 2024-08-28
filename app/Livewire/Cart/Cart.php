<?php

namespace App\Livewire\Cart;

use App\Factories\CartFactory;
use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    #[On('productAddedToCart')]
    public function getItemsProperty()
    {
        return CartFactory::getInstance()->items->load('product', 'variant', 'product.brand');
    }

    public function increment($itemId)
    {
        CartFactory::getInstance()->items()->find($itemId)?->increment('quantity');
        $this->dispatch('productAddedToCart');
    }

    public function decrement($itemId)
    {
        $item = CartFactory::getInstance()->items()->find($itemId);
        if ($item->quantity > 1) {
            $item->decrement('quantity');
            $this->dispatch('productRemovedFromCart');
        }
    }

    public function delete($itemId)
    {
        CartFactory::getInstance()->items()->where('id', $itemId)->delete();

        $this->dispatch('productRemovedFromCart');
    }

    public function getTotalProperty()
    {
        $total = 0;

        foreach (CartFactory::getInstance()->items as $item) {
            $total += $item->quantity * $item->product->price;
        }

        return $total;
    }
}
