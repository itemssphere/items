<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\NewsSeeder;
use Database\Seeders\AdminSeeder;
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
            CategoriesSeeder::class, // categories
            AdminSeeder::class, // super_admin
            UsersSeeder::class, // users from factory
            NewsSeeder::class, // news from factory
        ];
        /** Loop Through */
        foreach($seeders as $seed){
            $this->call($seed);
        }

    }
}
