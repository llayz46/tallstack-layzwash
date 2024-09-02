<?php

namespace App\Livewire\Product;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['header' => true, 'title' => "tdrfetyfrteeryerytyteryert"])]
class Products extends Component
{
    public Category $category;

    public function mount(Category $category)
    {
        $this->category = $category;
    }

    public function render()
    {
        return view('livewire.product.products', [
            'products' => Product::where('category_id', $this->category->id)->get()
        ]);
    }
}
