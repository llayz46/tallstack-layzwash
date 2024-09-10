<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\ProductVariant;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Order extends Component
{
    public $isAdminActive = false;
    public $isAccountActive = false;

    public $orderId;

    public function mount($orderId)
    {
        $this->orderId = $orderId;
    }

    public function getOrderProperty()
    {
        $orders = Auth::user()->orders()->findOrFail($this->orderId);

        foreach ($orders->items as $item) {
            $productVariant = ProductVariant::findOrFail($item->product_variant_id);
            $item->product = $productVariant->product;
            $item->brand = Brand::findOrFail($item->product->brand_id);
        }

        return $orders;
    }

    public function render()
    {
        return view('livewire.order')->layout('components.layouts.app', ['header' => false, 'title' => 'Order #' . $this->orderId]);
    }
}
