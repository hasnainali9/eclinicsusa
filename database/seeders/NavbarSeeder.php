<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            [
                'name' => "Home",
                'slug' => '/',
                'order' => '0',
            ],
            [
                'name' => "Solutions",
                'slug' => '/services',
                'order' => '1',
            ],
            [
                'name' => "Pricing",
                'slug' => '/pricing',
                'order' => '2',
            ],
            [
                'name' => "Why Us?",
                'slug' => '/why-us',
                'order' => '3',
            ],
            [
                'name' => "About Us",
                'slug' => '/about-us',
                'order' => '4',
            ],
            [
                'name' => "Contact Us",
                'slug' => '/contact-us',
                'order' => '5',
            ],
            
        ]);
    }
}
