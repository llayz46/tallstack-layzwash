<?php

namespace App\Livewire\Checkout;

use App\Models\Order;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => true, 'title' => 'Congratulations !'])]
class Success extends Component
{
    public string $sessionId;

    public ?Order $order = null;

    public ?Collection $products = null;

    public function mount()
    {
        $this->sessionId = request()->query('session_id');
    }

    public function getOrderProperty()
    {
        return Auth::user()->orders()->where('stripe_checkout_session_id', $this->sessionId)->first();
    }

    public function checkOrderStatus()
    {
        $this->order = $this->getOrderProperty();

        if ($this->order) {
            $this->products = ProductVariant::query()
                ->join('order_items', 'product_variants.id', '=', 'order_items.product_variant_id')
                ->join('products', 'product_variants.product_id', '=', 'products.id')
                ->where('order_items.order_id', $this->order->id)
                ->get();
        }
    }

    public function render()
    {
        return view('livewire.checkout.success');
    }
}
