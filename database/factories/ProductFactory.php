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
        $name = $this->faker->unique()->word;

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 1, 1000),
            'status' => $this->faker->boolean,
            'brand_id' => Brand::factory(),
            'category_id' => Category::factory(),
        ];
    }
}
