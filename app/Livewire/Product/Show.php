<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('layouts.app', ['header' => true, 'title' => 'categorie - nom produit'])]

class Show extends Component
{
    public Product $product;

    public function mount($product)
    {
        $this->product = $product->load('category', 'brand');
    }

    public function render()
    {
        return view('livewire.product.show');
    }
}
