<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
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
            'logo' => $this->faker->imageUrl(),
            'banner' => $this->faker->sentence(),
            'country' => $this->faker->country(),
        ];
    }
}
