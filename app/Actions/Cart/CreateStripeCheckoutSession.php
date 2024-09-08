<?php

namespace App\Actions\Cart;

use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Database\Eloquent\Collection;

class CreateStripeCheckoutSession
{
    public function createFromCart(Cart $cart)
    {
        return $cart->user
            ->allowPromotionCodes()
            ->checkout(
                $this->formatCartItems($cart->items),
                [
                    'customer_update' => [
                        'shipping' => 'auto'
                    ],
                    'shipping_address_collection' => [
                        'allowed_countries' => ['US', 'FR', 'DE', 'GB'],
                    ],
                    'metadata' => [
                        'user_id' => $cart->user->id,
                        'cart_id' => $cart->id,
                    ],
                ]
            );
    }

    private function formatCartItems(Collection $items)
    {
        return $items->loadMissing('product')->map(function (CartItem $item) {
            return [
                'price_data' => [
                    'currency' => 'USD',
                    'unit_amount' => $item->product->getAmount(),
                    'product_data' => [
                        'name' => $item->product->name,
                        'description' => $item->variant->size ? "Size: {$item->variant->size}" : "Capacity: {$item->variant->capacity}",
                        'metadata' => [
                            'product_id' => $item->product->id,
                            'product_variant_id' => $item->product_variant_id,
                        ],
                    ],
                ],
                'quantity' => $item->quantity,
            ];
        })->toArray();
    }
}
