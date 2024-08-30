<?php

namespace App\Livewire\Product;

use App\Actions\Cart\AddProductVariantToCart;
use App\Models\Product;
use App\Models\ProductVariant;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Livewire\Component;
use WireUi\Traits\WireUiActions;

#[Layout('components.layouts.app', ['header' => true, 'title' => 'categorie - nom produit'])]

class Show extends Component
{
    use WireUiActions;

    public Product $product;

    #[Validate('required', message: 'The variant field is required')]
    #[Validate('exists:product_variants,id', message: 'The selected variant is invalid')]
    public $variant;

    public function mount($product)
    {
        $this->product = $product->load('category', 'brand', 'variants');
    }

    public function addToCart(AddProductVariantToCart $action)
    {
        $this->validate();

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
        return view('livewire.product.show');
    }
}
