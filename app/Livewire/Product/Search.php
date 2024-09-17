<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public $topProducts;

    public function mount()
    {
        $this->topProducts = Product::select('products.*')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->orderBy('product_sales.quantity', 'desc')
            ->limit(4)
            ->with('brand')
            ->get();
    }

    public function render()
    {
        return view('livewire.product.search', [
            'products' => Product::search($this->search),
        ]);
    }
}
