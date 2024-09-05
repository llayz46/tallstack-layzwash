<?php

namespace App\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public ?Category $category;

    public ?Brand $brand;

    public function mount(String $slug)
    {
        $this->category = Category::where('slug', $slug)->first();

        if (!$this->category) {
            $this->brand = Brand::where('slug', $slug)->first();
        }

        if (!$this->category && !$this->brand) {
            abort(404);
        }
    }

    public function render()
    {
        return view('livewire.product.products', [
            'products' => $this->category
                ? Product::where('category_id', $this->category->id)->get()
                : Product::where('brand_id', $this->brand->id)->get()
        ])->layout('components.layouts.app', [
            'header' => true, 'title' => $this->category ? $this->category->name : $this->brand->name
        ]);
    }
}
