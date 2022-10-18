<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Create a Super Admin */
        $user = User::create([
            'name' => env('ADMIN_NAME', 'Administrator'),
            'email' => env('ADMIN_EMAIL', 'admin@gmail.com'),
            'password' => Hash::make(env('ADMIN_PASSWORD', 'password'))
        ]);
        /** Asign Role */
        $user->assignRole(User::SUPER_ADMIN);
        /** Add Media */
        $user->addMediaFromUrl("https://source.unsplash.com/random/300x300")->toMediaCollection("avatar"); // Avatar
        $user->addMediaFromUrl("https://source.unsplash.com/random/1024x1024")->toMediaCollection("wallpaper"); // Wallpaper
        /** define `Initial Status` for super_admin */
        $user->defineInitialStatus();
    }
}
