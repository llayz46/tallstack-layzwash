<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $colorsArray = [
            'FFB6C1', 'FF69B4', 'FF1493', 'DB7093', 'FFC0CB',
            'FF6347', 'FF4500', 'FFD700', 'FFA500', 'FF8C00',
            'FFFFE0', 'FFFACD', 'FAFAD2', 'FFEFD5', 'FFE4B5',
            'FFDAB9', 'EEE8AA', 'F0E68C', 'BDB76B', 'E6E6FA',
            'D8BFD8', 'DDA0DD', 'DA70D6', 'EE82EE', 'FF00FF'
        ];

        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'email' => fake()->unique()->safeEmail(),
            'avatar' => 'https://placeholderjs.com/750x750&text=' . urlencode(fake()->firstName()) . '&background=_' . $this->faker->randomElement($colorsArray),
            'role' => 'user',
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('testtest'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
