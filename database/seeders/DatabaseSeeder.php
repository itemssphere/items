<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AdminSeeder;
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
            AdminSeeder::class, // without any role
            RolesAndPermissionsSeeder::class, // roles and permissions
            UsersSeeder::class, // users from factory
        ];
        /** Loop Through */
        foreach($seeders as $seed){
            $this->call($seed);
        }
        
    }
}
