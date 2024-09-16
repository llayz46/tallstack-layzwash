<?php

namespace Database\Seeders;

use App\Models\Brand;
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
        $productNames = [
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
            'CQuartz Lite',
            'G5 Water Repellent Coating',
            'Motorplast',
            'Q2M Tire',
            'Q2M Iron',
            'Q2M Tar',
            'Foaming Car Wash',
            'Concentrated Car Wash',
            'Ultimate Wash & Wax',
            'Hybrid Ceramic Wash & Wax',
            'Hybrid Ceramic Detailer',
            'Waterless Wash & Wax',
            'Hybrid Ceramic Liquid Wax',
            'Brillant Shampoo',
            'Shampoo Banana',
            'Shampoo Cherry',
            'Auto Shampoo',
            'Mr Pink',
            'Citrus Wash & Gloss',
            'Extremys',
            'Descale',
            'Iron Remover',
            'Tar Remover',
            'S1 Wash & Coat',
            'Mystic Bubble',
            'Innova 7',
            'Ecoclean Wash',
            'Honeydew Snow Foam',
            'Maxi Shampoo',
            'W1 Gwash',
            'Hydro2 Foam',
            'W3 Ceramic Gwash',
        ];

        $brandNames = [
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

        foreach ($brandNames as $brandName) {
            Brand::factory()
                ->create([
                    'name' => $brandName,
                    'slug' => Str::slug($brandName),
                ]);
        }

        foreach ($productNames as $productName) {
            Product::factory()
                ->hasVariants(rand(3, 5))
                ->hasImages(rand(3, 4))
                ->hasComments(rand(3, 6))
                ->hasSales()
                ->create([
                    'name' => $productName,
                    'slug' => Str::slug($productName),
                    'category_id' => 1,
                    'brand_id' => Brand::inRandomOrder()->first()->id,
                ])
                ->each(function (Product $product) {
                    $product->category()->associate(Category::whereNotNull('parent_id')->inRandomOrder()->first());
                    $product->save();

                    $firstImage = $product->images->first();

                    $firstImage->update(['main' => 1]);
            });
        }

//        Product::factory(80)
//            ->hasVariants(rand(3, 5))
//            ->hasImages(rand(3, 4))
//            ->hasComments(rand(3, 6))
//            ->hasBrand()
//            ->hasSales()
//            ->create([
//                'category_id' => 1,
//            ])
//            ->each(function (Product $product) {
//                $product->category()->associate(Category::whereNotNull('parent_id')->inRandomOrder()->first());
//                $product->save();
//
//                $firstImage = $product->images->first();
//
//                $firstImage->update(['main' => 1]);
//        });

        User::factory()->create([
            'email' => 'test@test.fr',
            'password' => 'testtest',
            'role' => 'admin'
        ]);
    }
}
