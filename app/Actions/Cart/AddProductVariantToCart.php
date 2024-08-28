<?php

namespace App\Actions\Cart;

use App\Factories\CartFactory;
use App\Models\Cart;

class AddProductVariantToCart
{
    public function add($variantId)
    {
        CartFactory::getInstance()->items()->firstOrCreate(
            ['product_variant_id' => $variantId],
            ['quantity' => 0])->increment('quantity');
    }
}
