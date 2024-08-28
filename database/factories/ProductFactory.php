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
        $name = [
            'Reset',
            'Gentle Snow Foam',
            'Iron X',
            'Q2M Foam',
            'Q2M Bathe',
            'Q2M Bathe+',
            'M7',
            'S2 Foamy',
            'DS Scale',
            'Nano Factor',
            'Max 2000',
            'SF Red',
            'Lift',
            'Reactivation Shampoo',
            'DHydrate',
            'Double Twistress',
            'Guyzm\'o XXL Evo V2',
            'Exo v5 Hydrophobic Coating',
            'CQuartz UK Edition 3.0',
            'Q2 Trim',
            'Q2 View Evo',
        ];

        $actualName = $this->faker->unique()->randomElement($name);

        return [
            'name' => $actualName,
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
