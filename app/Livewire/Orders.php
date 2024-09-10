<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\ProductVariant;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => false, 'title' => 'Your orders'])]
class Orders extends Component
{
    public $isAdminActive = false;
    public $isAccountActive = false;

    public function getOrdersProperty()
    {
        $orders = \App\Models\Order::where('user_id', auth()->id())->paginate(10);

        foreach ($orders as $order) {
            foreach ($order->items as $item) {
                $productVariant = ProductVariant::findOrFail($item->product_variant_id);
                $item->product = $productVariant->product;
                $item->brand = Brand::findOrFail($item->product->brand_id);
            }
        }

        return $orders;
    }

    public function render()
    {
        return view('livewire.orders');
    }
}
