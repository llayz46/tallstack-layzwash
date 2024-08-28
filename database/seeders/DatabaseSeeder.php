<?php

namespace Database\Seeders;

use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(10)
            ->hasVariants(rand(3, 5))
            ->hasImages(rand(3, 4))
            ->hasComments(rand(3, 6))
            ->hasBrand()
            ->hasCategory()
            ->create()
            ->each(function (Product $product) {
                $firstImage = $product->images->first();

                $firstImage->update(['main' => 1]);
        });

        User::factory()->create([
            'email' => 'test@test.fr',
            'password' => 'testtest',
            'role' => 'admin'
        ]);
    }
}
