<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $actualName = $this->faker->unique()->words(2, true),
            'slug' => Str::slug($actualName),
            'description' => $this->faker->text,
            'usage' => json_encode($this->faker->words(5)),
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'status' => $this->faker->boolean,
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
