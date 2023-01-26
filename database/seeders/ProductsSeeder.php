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
        /** Create Products */
        Product::factory()->count(20)->create();
    }
}
