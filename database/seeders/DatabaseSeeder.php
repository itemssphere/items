<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\AdminSeeder;
<<<<<<< HEAD
use Database\Seeders\HashtagSeeder;
use Database\Seeders\SocialsSeeder;
=======
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
use Database\Seeders\ProductsSeeder;
use Database\Seeders\CategoriesSeeder;
use Database\Seeders\RolesAndPermissionsSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $seeders = [
            RolesAndPermissionsSeeder::class, // roles and permissions
            HashtagSeeder::class, // create hastags (combos)
            CategoriesSeeder::class, // categories
            AdminSeeder::class, // super_admin
            UsersSeeder::class, // users from factory
            NewsSeeder::class, // news from factory
            ProductsSeeder::class, // Products from factory
<<<<<<< HEAD
            AdvertisementSeeder::class, // Advertisements from factory
            SocialsSeeder::class, // Socials from factory
=======
>>>>>>> ad9023aa5a5befee8151f7f4aa12b6349fae90a4
        ];
        /** Loop Through */
        foreach($seeders as $seed){
            $this->call($seed);
        }

    }
}
