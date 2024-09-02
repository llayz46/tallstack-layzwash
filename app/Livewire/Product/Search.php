<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Livewire\Attributes\Url;
use Livewire\Component;

class Search extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.product.search', [
            'products' => Product::search($this->search),
        ]);
    }
}
