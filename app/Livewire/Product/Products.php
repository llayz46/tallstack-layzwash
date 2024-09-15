<?php

namespace App\Livewire\Product;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public ?Category $category = null;
    public ?Brand $brand = null;

    public array $allBrands = [];
    public array $filterByBrands = [];

    public array $categories = [];
    public array $filterByCategories = [];


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

        $this->allBrands = Brand::orderBy('name')->get()->toArray();
    }

    public function updatedFilterByBrands() // Reset la pagination quand on filtre par marque
    {
        $this->resetPage();
    }

    public function updatedFilterByCategories() // Reset la pagination quand on filtre par marque
    {
        $this->resetPage();
    }

    public function render()
    {
        $products = Product::query();

        if (request()->has('top_selling')){
            $products->select('products.*')
                ->join('product_sales', 'products.id', '=', 'product_sales.product_id')
                ->orderBy('product_sales.quantity', 'desc');
        }

        if ($this->category) {
            $products->where('category_id', $this->category->id);
        }

        if ($this->brand) {
            $products->where('brand_id', $this->brand->id);
            $this->categories = Product::where('brand_id', $this->brand->id)->with('category')->get()->pluck('category')->unique()->toArray();
        }

        if (!empty($this->filterByBrands)) {
            $products->whereIn('brand_id', $this->filterByBrands);
        }

        if (!empty($this->filterByCategories)) {
            $products->whereIn('category_id', $this->filterByCategories);
        }

        return view('livewire.product.products', [
            'products' => $products->paginate(12),
        ])->layout('components.layouts.app', [
            'header' => true,
            'title' => $this->category ? $this->category->name : ($this->brand ? $this->brand->name : 'All Products')
        ]);
    }
}
