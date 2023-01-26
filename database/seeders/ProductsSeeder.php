<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * depend on categories for testing purposes
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD
        /** Create Products */
        Product::factory()->count(20)->create();
=======
        /** Number of Products */
        $parents = 10;
        $secondary = 25;
        $third = 50;
        $fourth = 100;
        /** Create Products */
        Product::factory()->count($parents)->create([
            'category_id' => 1
        ]);
        /** Create Products */
        Product::factory()->count($secondary * Arr::random([2,3]))->create([
            'category_id' => Arr::random(range(1,$parents))
        ]);
        /** Create Products */
        Product::factory()->count($third * Arr::random([2,3]))->create([
            'category_id' => Arr::random(range($parents / 2, $secondary))
        ]);
        /** Create Products */
        Product::factory()->count($fourth * Arr::random([2,3]))->create([
            'category_id' => Arr::random(range($secondary / 2, $third))
        ]);
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
    }
}
