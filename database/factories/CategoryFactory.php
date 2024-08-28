<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = [
            'Prewash',
            'Shampoo',
            'Bug Remover',
            'Wheel Cleaner',
            'Tire Cleaner',
            'Glass Cleaner',
            'Drying Aids',
            'Detailing Clay',
            'Polish',
            'Wax',
            'Sealant',
            'Quick Detailer',
            'Interior Cleaner',
            'Leather Cleaner',
            'Fabric Cleaner',
            'Carpet Cleaner',
            'Coatings',
        ];
        return [
            'name' => $actualCategory = $this->faker->unique()->randomElement($name),
            'slug' => Str::slug($actualCategory),
            'description' => $this->faker->sentence,
        ];
    }
}
