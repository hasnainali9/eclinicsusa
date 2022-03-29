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
                'is_default'=>true
            ],
            [
                'name' => "Solutions",
                'slug' => '#',
                'order' => '1',
                'is_default'=>true
            ],
            [
                'name' => "Pricing",
                'slug' => '/pricing',
                'order' => '2',
                'is_default'=>true
            ],
            [
                'name' => "Blog",
                'slug' => '/en/blog',
                'order' => '3',
                'is_default'=>true
            ],
            [
                'name' => "Why Us?",
                'slug' => '/p/why-us',
                'order' => '4',
                'is_default'=>true
            ],
            [
                'name' => "About Us",
                'slug' => '/p/about-us',
                'order' => '5',
                'is_default'=>true
            ],
            [
                'name' => "Contact Us",
                'slug' => '/contact-us',
                'order' => '6',
                'is_default'=>true
            ],
            
        ]);
    }
}
