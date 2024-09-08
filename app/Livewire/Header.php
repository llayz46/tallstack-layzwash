<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Header extends Component
{
    public Collection $exteriorCategories;

    public Product $exteriorTopProduct;

    public Brand $exteriorTopBrand;

    public Collection $interiorCategories;

    public Product $interiorTopProduct;

    public Brand $interiorTopBrand;

    public function mount()
    {
        $this->exteriorCategories = Category::select('id', 'name', 'slug')
            ->where('type', 'exterior')
            ->whereNull('parent_id')
            ->with(['children' => function($query) {
                $query->select('id', 'name', 'slug', 'parent_id');
            }])
            ->get();

        $this->interiorCategories = Category::select('id', 'name', 'slug')
            ->where('type', 'interior')
            ->whereNull('parent_id')
            ->with(['children' => function($query) {
                $query->select('id', 'name', 'slug', 'parent_id');
            }])
            ->get();

        $this->exteriorTopProduct = Product::select('products.name', 'products.slug', 'products.id', 'products.category_id')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.type', 'exterior')
            ->orderBy('product_sales.quantity', 'desc')
            ->get()->first();

        $this->interiorTopProduct = Product::select('products.name', 'products.slug', 'products.id', 'products.category_id')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.type', 'interior')
            ->orderBy('product_sales.quantity', 'desc')
            ->get()->first();

        $this->exteriorTopBrand = Brand::select('brands.name', 'brands.slug', 'brands.id')
            ->join('products', 'products.brand_id', '=', 'brands.id')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.type', 'exterior')
            ->orderBy('product_sales.quantity', 'desc')
            ->get()->first();

        $this->interiorTopBrand = Brand::select('brands.name', 'brands.slug', 'brands.id')
            ->join('products', 'products.brand_id', '=', 'brands.id')
            ->join('product_sales', 'product_sales.product_id', '=', 'products.id')
            ->join('categories', 'categories.id', '=', 'products.category_id')
            ->where('categories.type', 'interior')
            ->orderBy('product_sales.quantity', 'desc')
            ->get()->first();
    }
}
