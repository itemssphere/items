<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Number of Categories */
        $parents = 10;
        $secondary = 10;
        $third = 15;
        $fourth = 20;
        /** Create Categories */
        Category::factory()->count($parents)->create([
            'category_id' => null
        ]);
        /** Create Categories */
        Category::factory()->count($secondary)->create([
            'category_id' => Arr::random(range(1,$parents))
        ]);
        /** Create Categories */
        Category::factory()->count($third)->create([
            'category_id' => Arr::random(range($parents / 2, $secondary))
        ]);
        /** Create Categories */
        Category::factory()->count($fourth)->create([
            'category_id' => Arr::random(range($secondary / 2, $third))
        ]);
    }
}
