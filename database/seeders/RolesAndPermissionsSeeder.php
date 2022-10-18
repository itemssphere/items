<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Admin and User roles */
        foreach(User::STATIC_ROLES as $role){
            foreach($role as $role_name){
                Role::create(['name' => $role_name]);
            }
        }
    }
}
