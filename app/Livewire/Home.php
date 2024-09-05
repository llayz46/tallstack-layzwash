<?php

namespace App\Livewire;

use App\Models\Product;
use App\Models\ProductSales;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => true, 'title' => 'Home'])]
class Home extends Component
{
    public Collection $products;

    public function mount()
    {
        $this->products = Product::select('products.*')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->orderBy('product_sales.quantity', 'desc')
            ->limit(4)
            ->with('brand')
            ->get();
    }
}
