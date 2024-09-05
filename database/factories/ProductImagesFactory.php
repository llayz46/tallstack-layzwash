<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductImages>
 */
class ProductImagesFactory extends Factory
{
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

        $wordsArray = [
            'apple', 'banana', 'cherry', 'date', 'elderberry',
            'fig', 'grape', 'honeydew', 'kiwi', 'lemon',
            'mango', 'nectarine', 'orange', 'papaya', 'quince',
            'raspberry', 'strawberry', 'tangerine', 'watermelon', 'blackberry',
            'blueberry', 'cranberry', 'grapefruit', 'guava', 'lime',
        ];

        return [
            'path' => "https://placeholderjs.com/750x750&text=" . urlencode($this->faker->randomElement($wordsArray)) . "&background=_" . $this->faker->randomElement($colorsArray),
            'main' => false,
        ];
    }
}
