<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductVariant>
 */
class ProductVariantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'capacity' => $this->faker->randomElement(['250mL', '500mL', '1L', '1.5L', '5L']),
//            'size' => $this->faker->randomElement(['XXS', 'XS', 'S', 'M', 'L', 'XL', '2XL', '3XL']),
            'size' => null,
            'stock' => $this->faker->numberBetween(0, 100),
        ];
    }
}
