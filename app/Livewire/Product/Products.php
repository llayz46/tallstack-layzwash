<?php

namespace App\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Products extends Component
{
    public ?Category $category = null;

    public ?Brand $brand = null;

    public function mount(?String $slug = null)
    {
        if ($slug) {
            $this->category = Category::where('slug', $slug)->first();

            if (!$this->category) {
                $this->brand = Brand::where('slug', $slug)->first();
            }

            if (!$this->category && !$this->brand) {
                abort(404);
            }
        }
    }

    public function render()
    {
        $products = Product::query();

        if (request()->has('top_selling')){
            $products->select('products.*')
                     ->join('product_sales', 'products.id', '=', 'product_sales.product_id')
                     ->orderBy('product_sales.quantity', 'desc');
        } elseif ($this->category) {
            $products->where('category_id', $this->category->id);
        } elseif ($this->brand) {
            $products->where('brand_id', $this->brand->id);
        }

        return view('livewire.product.products', [
            'products' => $products->paginate(12)
        ])->layout('components.layouts.app', [
            'header' => true,
            'title' => $this->category ? $this->category->name : ($this->brand ? $this->brand->name : 'All Products')
        ]);
    }
}
