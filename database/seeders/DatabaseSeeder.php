<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $exteriorCategories = [
            'Washing',
            'Polishing',
            'Protecting',
        ];

        $interiorCategories = [
            'Cleaning',
            'Protecting & Dressing',
        ];

        $washingCategories = [
            'Prewash',
            'Shampoo',
            'Bug Remover',
            'Glass Cleaner',
            'Wheel & Tire cleaner',
            'Mitt & Sponge',
            'Foam guns & Cannon',
        ];

        $polishingCategories = [
            'Polish',
            'Machines',
            'Detailing Clay',
            'Pads',
            'Cleaner',
            'Polish Accessories',
        ];

        $protectingCategories = [
            'Wax',
            'Quick Detailer',
            'Drying Aids',
            'Ceramics',
            'Sealant',
            'Coating Accessories',
        ];

        $cleaningCategories = [
            'All Purpose Cleaner',
            'Plastics',
            'Leather',
            'Fabrics',
            'Microfiber Towels',
            'Brushes & Accessories',
        ];

        $protectingDressingCategories = [
            'Fabric Coating',
            'Leather Coating',
            'Plastic Dressing',
            'Odor',
            'Dressing Accessories',
        ];

        foreach ($exteriorCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'exterior',
            ]);
        }

        foreach ($interiorCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'interior',
            ]);
        }

        foreach ($washingCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'exterior',
                'parent_id' => Category::where('name', 'Washing')->first()->id,
            ]);
        }

        foreach ($polishingCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'exterior',
                'parent_id' => Category::where('name', 'Polishing')->first()->id,
            ]);
        }

        foreach ($protectingCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'exterior',
                'parent_id' => Category::where('name', 'Protecting')->first()->id,
            ]);
        }

        foreach ($cleaningCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'interior',
                'parent_id' => Category::where('name', 'Cleaning')->first()->id,
            ]);
        }

        foreach ($protectingDressingCategories as $category) {
            Category::factory()->create([
                'name' => $category,
                'slug' => Str::slug($category),
                'type' => 'interior',
                'parent_id' => Category::where('name', 'Protecting & Dressing')->first()->id,
            ]);
        }

        Product::factory(10)
            ->hasVariants(rand(3, 5))
            ->hasImages(rand(3, 4))
            ->hasComments(rand(3, 6))
            ->hasBrand()
            ->create([
                'category_id' => 1,
            ])
            ->each(function (Product $product) {
                $product->category()->associate(Category::whereNotNull('parent_id')->inRandomOrder()->first());
                $product->save();

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
