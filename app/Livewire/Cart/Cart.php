<?php

namespace App\Livewire\Cart;

use App\Actions\Cart\CreateStripeCheckoutSession;
use App\Factories\CartFactory;
use Livewire\Attributes\On;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class Cart extends Component
{
    use WireUiActions;

    public function getCartProperty()
    {
        return CartFactory::make();
    }

    public function checkout(CreateStripeCheckoutSession $createStripeCheckoutSession)
    {
        if ($this->cart->items->isEmpty()) {
            $this->notification()->send([
                'icon' => 'error',
                'title' => 'Empty cart!',
                'description' => 'Your cart is empty!',
            ]);
            return null;
        }

        return $createStripeCheckoutSession->createFromCart($this->cart);
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
