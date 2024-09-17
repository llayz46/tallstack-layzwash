<?php

namespace App\Livewire\Product;

use App\Actions\Cart\AddProductVariantToCart;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Validate;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

class Show extends Component
{
    use WireUiActions;

    public Product $product;

    public Collection $similarProducts;

    #[Validate('required', message: 'Please select a variant')]
    #[Validate('exists:product_variants,id', message: 'The selected variant is invalid')]
    public $variant;

    public $comments;

    public function mount($product)
    {
        $this->product = $product->load('category', 'brand', 'variants');

        $this->comments = $this->product->comments()->with('user')->orderBy('id', 'desc')->limit(4)->get();

        $this->similarProducts = $this->product->getSimilarProducts($this->product);
    }

    public function addToCart(AddProductVariantToCart $action)
    {
        $this->validate();

        if(!ProductVariant::findOrFail($this->variant)->stock) {
            $this->notification()->send([
                'icon' => 'error',
                'title' => 'Error!',
                'description' => 'Sorry, this product is out of stock',
            ]);

            return;
        }

        $action->add(
            variantId: $this->variant,
        );

        $this->notification()->send([
            'icon' => 'success',
            'title' => 'Product added',
            'description' => 'Your product has been added to the cart',
        ]);

        $this->dispatch('productAddedToCart');
    }

    public function render()
    {
        return view('livewire.product.show')
            ->layout('components.layouts.app', [
                'header' => true, 'title' => $this->product->brand->name . " - " . $this->product->name
            ]);
    }
}
