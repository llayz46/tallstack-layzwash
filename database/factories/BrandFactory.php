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
        $name = [
            'CarPro',
            'Gyeon',
            'Koch Chemie',
            'Meguiar\'s',
            'Mothers',
            'Sonax',
            'Swissvax',
            'ValetPRO',
            '3M',
            'Auto Finesse',
            'Chemical Guys',
            'Turtle Wax',
            'Adams Polishes',
            'Alchimy 7',
            'Gtechniq',
            'Glaco',
            'Fictech',
            'Autoglym',
            'Soft99',
            'Elite Detailer',
            'Fra-Ber',
            'Fresso',
            'Innovacar',
            'P&S',
            'Rupes',
            'Scholl Concepts',
            'The Rag Company',
        ];

        return [
            'name' => $actualName = $this->faker->unique()->randomElement($name),
            'slug' => Str::slug($actualName),
            'logo' => $this->faker->imageUrl(),
            'banner' => $this->faker->sentence(),
            'country' => $this->faker->country(),
        ];
    }
}
