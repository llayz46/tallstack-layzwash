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
        $bool = $this->faker->boolean;

        return [
            'size' => $bool ? $this->faker->randomElement(['500mL', '1L', '1.5L']) : null,
            'color' => $bool ? null : $this->faker->randomElement(['S', 'M', 'L', 'XL']),
        ];
    }
}
