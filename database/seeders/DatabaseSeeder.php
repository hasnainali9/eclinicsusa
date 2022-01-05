<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SettingSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            NavbarSeeder::class,
            SubServicesSeeder::class,
            SliderSeeder::class
        ]);
    }
}
