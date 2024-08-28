<?php

namespace App\Factories;

use App\Models\Cart;

class CartFactory
{
    private static ?Cart $cartInstance = null;

    private function __construct() {}

    public static function getInstance(): Cart
    {
        if (is_null(self::$cartInstance)) {
            self::$cartInstance = match(auth()->guest()) {
                true => Cart::firstOrCreate(['session_id' => session()->getId()]),
                false => auth()->user()->cart ?: auth()->user()->cart()->create(),
            };
        }

        return self::$cartInstance;
    }
}
