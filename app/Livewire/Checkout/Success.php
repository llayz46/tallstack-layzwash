<?php

namespace App\Livewire\Checkout;

use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => true, 'title' => 'Congratulations !'])]
class Success extends Component
{
    public string $sessionId;

    public function mount()
    {
        $this->sessionId = request()->query('session_id');
    }

    public function getOrderProperty()
    {
        return Auth::user()->orders()->where('stripe_checkout_session_id', $this->sessionId)->first();
    }

    public function render()
    {
        return view('livewire.checkout.success', [
            'products' => ProductVariant::query()
                ->join('order_items', 'product_variants.id', '=', 'order_items.product_variant_id')
                ->join('products', 'product_variants.product_id', '=', 'products.id')
                ->where('order_items.order_id', $this->order->id)
                ->get()
        ]);
    }
}
