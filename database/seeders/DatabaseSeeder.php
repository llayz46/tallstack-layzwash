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
            ->hasVariants(3)
            ->hasImages(3)
            ->hasBrand()
            ->hasCategory()
            ->create();

        User::factory()->create([
            'email' => 'test@test.fr',
            'password' => 'testtest'
        ]);
    }
}
